import { request } from './utils.js';

const btnAdd = document.getElementById('add');
const btnGive = document.getElementById('give');


btnAdd.addEventListener('click', async () => {

    request(`add`, { method: 'POST' });
    
});

btnGive.addEventListener('click', async () => {

    request(`give`, { method: 'POST' });
    
});




