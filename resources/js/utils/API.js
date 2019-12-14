import axios from 'axios';

axios.create({
    baseURL: 'http://127.0.0.1:8000/api/v1',
    responseType: 'json'
});

export default {
    auth: {
        userLogin(payload) {
            return apiClient.post('/auth/login/', payload);
        },
        userAliveAndActive() {
            return apiClient.post('/auth/check/');
        },
        userLogout() {
            return apiClient.post('/auth/logout/');
        },
        generateResetToken(payload) {
            return apiClient.post('/auth/generate_reset_token/', payload);
        },
        resetPassword(payload) {
            return apiClient.post('/auth/reset_password/', payload);
        }
    }
};
