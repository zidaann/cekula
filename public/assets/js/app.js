const password = document.getElementById('password'); // id dari input password
const showHide = document.getElementById('showHide'); // id span showHide dalam input group password

password.type = 'password'; // set type input password menjadi password
password.style.padding = "8px 20px";
password.style.borderColor = "#9FC3F9";
showHide.innerHTML = '<i class="bi bi-eye"></i>'; // masukan icon eye dalam icon bootstrap 5
showHide.style.cursor = 'pointer'; // ubah cursor menjadi pointer
// jadi ketika span di hover maka cursornya berubah pointer

showHide.addEventListener('click', () => {
// ketika span diclick
    if (password.type === 'password') {
        // jika type inputnya password
        password.type = 'text'; // ubah type menjadi text
        showHide.innerHTML = '<i class="bi bi-eye-slash"></i>'; // ubah icon menjadi eye slash
    } else {
        // jika type bukan password (text)
        showHide.innerHTML = '<i class="bi bi-eye"></i>'; // ubah icon menjadi eye
        password.type = 'password'; // ubah type menjadi password
    }
});




// ALERT PASSWORD
const passAlert = document.querySelector('.passAlert');

passAlert.addEventListener('click', function(){
    Swal.fire({
        title: 'Lupa Kata Sandi?',
        text: 'Silahkan Hubungi Administrator Sekolah Untuk \n Mengakses Aplikasi',
        imageUrl: "/assets/img/password_alert.png",
        imageWidth: 100,
        imageHeight: 100,
        imageAlt: 'Custom image',
      });
});


// ALERT POSTING JADWAL
btnPost = document.querySelector('.btn-post');
btnPost.addEventListener('click', function(){
    Swal.fire({
        title: 'Posting Jadwal Berhasil',
        text: 'Silahkan kembali ke halaman jadwal sekolah',
        imageUrl: '/img/alert_posting_jadwal.png',
        imageWidth: 120,
        imageHeight: 200,
        imageAlt: 'Custom image',
        showCloseButton: true,
        showConfirmButton: false,
      });
});


// ALERT DELETE JADWAL
btnDelete = document.querySelector('.delete_jadwal');
btnDelete.addEventListener('click', function(){
    alert('hai');
});