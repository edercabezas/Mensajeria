import Vue from 'vue'
import Vuex from 'vuex'

Vue.use(Vuex);

export default new Vuex.Store({
  state: {
      messages: [],
      selectedConversacion: null,
      conversacion: [],
      querybusqueda: '',
      user: null     
  },

  mutations: {
      setUser(state, user){
        state.user = user;
      },

        newMessagesList(state, messages ){
              state.messages = messages;

        },

        
        selectConversacion(state, conversa){
           state.selectedConversacion = conversa;

        },

        newConversacionLista(state, conversacion){
              state.conversacion = conversacion;
        },

        newQuerysearch(state, newValue){
              state.querybusqueda = newValue;
        },

        addMessages(state, messages){

              const conversation = state.conversacion.find((conversation) => {
                  return conversation.contact_id == messages.from_id ||
                         conversation.contact_id == messages.to_id;

                 });

                const autor = state.user.id === messages.from_id ? 'Tú' : conversation.contact_name;

                    conversation.last_message = `${autor}: ${messages.contecnt}`;
                    conversation.las_time = messages.created_at;
               if(state.selectedConversacion.contact_id == messages.from_id ||
                  state.selectedConversacion.contact_id == messages.to_id)
                state.messages.push(messages);
        }
  },

actions: {
    getMensajes(context, conversa ){
          return axios.get(`/api/mensajes?contact_id=${conversa.contact_id}`)
            .then(
                  response => { 
                      context.commit('selectConversacion', conversa);
                      context.commit('newMessagesList', response.data);
                    }

                   );
          },
          getConversacion(context){
               return  axios.get('/api/conversacion')
                .then( response => {
                 context.commit('newConversacionLista', response.data);
                });
            },
         postMessage(context, newMensaje){
            const params = {
              to_id: context.state.selectedConversacion.contact_id,
              content: newMensaje
            };

            return  axios.post('/api/mensajes', params)
                 .then(response => {  
                    if(response.data.success){ 
                     // newmensaje = '';
                     const mensaje = response.data.mensaje;
                     mensaje.written_by_me = true;
                     context.commit('addMessages', mensaje);
                      console.log('Hola mundo');
                
                }

               });

            }

        },

        getters: {

             conversacionFiltered(state){
              return state.conversacion.filter(
                  conversa => 
                    conversa.contact_name 
                         .toLowerCase()
                         .includes(state.querybusqueda.toLowerCase())
                );
            },
            getConversacionById(state){
              
              return function (conversacionId){
                return  state.conversacion.find(
                    conversa => 
                      conversa.id == conversacionId
                  );

              }
            }
        }

  });