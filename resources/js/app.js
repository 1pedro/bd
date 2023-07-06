import './bootstrap';

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();


window.deleteEntity = async function (id, entity) {
    await fetch('/api/delete', {headers: {'content-type': 'application/json'},method: 'POST', body: JSON.stringify({id, entity})})
}
