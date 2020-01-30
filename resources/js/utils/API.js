import axios from 'axios';
//An even better option is to create 
//an instance of axios that specifically targets our base route.
const token = localStorage.getItem('token');
const version = '/api/v1/'
const apiAxios = axios.create({
    headers: {
        Authorization: 'Bearer ' + token,
        'Accept-Version': '~1'
    },
    responseType: 'json',
});

export default {
    getArticles: () => apiAxios.get(`${version}articles`),
    login: params => apiAxios.post(`${version}auth/login`, params),

};
