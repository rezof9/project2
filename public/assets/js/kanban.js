// public/js/kanban.js

// Fungsi untuk mengizinkan drop
function allowDrop(ev) {
    ev.preventDefault();
}

// Fungsi saat drag dimulai
function drag(ev) {
    ev.dataTransfer.setData("text", ev.target.id);
}

// Fungsi saat item di-drop
function drop(ev) {
    ev.preventDefault();
    var data = ev.dataTransfer.getData("text");
    var taskId = data.split('_')[1];  // Mengambil ID task dari ID elemen
    
    // Menentukan status baru berdasarkan kolom yang di-drop
    var newStatus = ev.target.closest('.kanban-column').id;

    // Kirim status baru ke server (gunakan AJAX atau Form)
    updateTaskStatus(taskId, newStatus);

    // Pindahkan elemen ke kolom yang baru
    var taskElement = document.getElementById(data);
    ev.target.closest('.task-list').appendChild(taskElement);
}

// Fungsi untuk mengupdate status task
function updateTaskStatus(taskId, newStatus) {
    fetch(`/task/${taskId}/updateStatus`, {
        method: 'PUT',
        headers: {
            'Content-Type': 'application/json',
            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
        },
        body: JSON.stringify({ status: newStatus })
    })
    .then(response => response.json())
    .then(data => {
        if (data.success) {
            console.log('Status updated successfully');
        }
    })
    .catch(error => console.error('Error updating status:', error));
}
