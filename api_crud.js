// api_crud.js
// Script JS per operazioni CRUD su https://restful-api.dev/

const API_URL = 'https://restful-api.dev/api/v1/objects';

// Crea un elemento
async function createItem(data) {
    const res = await fetch(API_URL, {
        method: 'POST',
        headers: { 'Content-Type': 'application/json' },
        body: JSON.stringify(data)
    });
    return res.json();
}

// Visualizza un elemento
async function readItem(id) {
    const res = await fetch(`${API_URL}/${id}`);
    return res.json();
}

// Modifica un elemento
async function updateItem(id, data) {
    const res = await fetch(`${API_URL}/${id}`, {
        method: 'PUT',
        headers: { 'Content-Type': 'application/json' },
        body: JSON.stringify(data)
    });
    return res.json();
}

// Elimina un elemento
async function deleteItem(id) {
    const res = await fetch(`${API_URL}/${id}`, {
        method: 'DELETE' });
    return res.json();
}

// Esempio d'uso:
// createItem({ name: 'Test', data: { a: 1 } }).then(console.log);
// readItem(1).then(console.log);
// updateItem(1, { name: 'Modificato' }).then(console.log);
// deleteItem(1).then(console.log);
