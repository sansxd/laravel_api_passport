import axios from 'axios';
//An even better option is to create 
//an instance of axios that specifically targets our base route.
const token = localStorage.getItem('token');

const apiAxios = axios.create({
    baseURL: 'http://127.0.0.1:8000/api/v1',
    headers: {
        Authorization: 'Bearer ' + token,
        'Accept-Version': '~1'
    },
    responseType: 'json',
});

export default {
    getArticles: () => apiAxios.get('/articles'),
    login: params => apiAxios.post('/auth/login', params),

};
