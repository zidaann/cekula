const password = document.getElementById('password'); // id dari input password
const showHide = document.getElementById('showHide'); // id span showHide dalam input group password

password.type = "password"; // set type input password menjadi password
password.style.padding = "8px 20px";
password.style.borderColor = "#9FC3F9";
showHide.innerHTML = '<i class="bi bi-eye"></i>'; // masukan icon eye dalam icon bootstrap 5
showHide.style.cursor = 'pointer'; // ubah cursor menjadi pointer
// // jadi ketika span di hover maka cursornya berubah pointer

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
// const passAlert = document.querySelector(".passAlert");
function passwordAlert() {
    Swal.fire({
        title: "Lupa Kata Sandi?",
        text: "Silahkan Hubungi Administrator Sekolah Untuk \n Mengakses Aplikasi",
        imageUrl: "/assets/img/password_alert.png",
        imageWidth: 100,
        imageHeight: 100,
        imageAlt: "Custom image",
    });
}

// ALERT POSTING JADWAL
// btnPost = document.querySelector('.btn-post');
// btnPost.addEventListener('click', function(){
//     Swal.fire({
//         title: 'Posting Jadwal Berhasil',
//         text: 'Silahkan kembali ke halaman jadwal sekolah',
//         imageUrl: '/img/alert_posting_jadwal.png',
//         imageWidth: 120,
//         imageHeight: 200,
//         imageAlt: 'Custom image',
//         showCloseButton: true,
//         showConfirmButton: false,
//       });
// });

// alert hapus 
$('.delete').click(() => {
    swal({
        title: "Yakin Ingin Menghapus?",
        imageUrl: '/img/alert_posting_jadwal.png',
        imageWidth: 120,
        imageHeight: 200,
        buttons: true,
        dangerMode: true,
      })
      .then((willDelete) => {
        if (willDelete) {
          swal("Berhasil Dihapus!", {
            icon: "success",
          });
        } else {
          swal("Gagal Dihapus!");
        }
      });
});

// Show/Hide Jadwal Sekolah

// preview Image
function previewImage() {
    const image = document.querySelector("#image");
    const imgPreview = document.querySelector(".img-preview");

    imgPreview.style.display = "block";

    const oFReader = new FileReader();
    oFReader.readAsDataURL(image.files[0]);

    oFReader.onload = function (oFREvent) {
        imgPreview.src = oFREvent.target.result;
    };
}

// let toggleKelas = document.querySelector('.toggle-kelas'),
//     ilustrasi = document.querySelector('.ilustration_class');
// function hideIlustration(){
//     // alert('success');
//     // ilustrasi.classList.add('is-active');
//     // toggleKelas.addEventListener('click', (e)=>{
//     //     // e.preventDefault();
//     //     // ilustrasi.classList.add('is-active');
//     //     alert('success');
//     // });

// }

// =======================  HIDE ILUSTRATION =======================
$(".toggle-kelas").click(function (e) {
    e.preventDefault();
    $(".ilustration_class").slideToggle("show");
});

// =======================  FORM INPUT DATEPICKER =======================
// $(document).ready(function(){
//     $(".datepicker").datepicker({
//         changeMonth: true,
//         changeYear: true,
//     });
// })

// =======================  Tab Bar Fasilitas =======================
// let fasilitas = document.querySelectorAll(".fasilitas-toggle"),
//     contents = document.querySelectorAll(".fasilitas-content");
// fasilitas.forEach((tab, index) => {
//     tab.addEventListener("click", () => {
//         contents.forEach((content) => {
//             content.classList.remove("is-active");
//         });
//         fasilitas.forEach((tab) => {
//             tab.classList.remove("is-active");
//         });

//         contents[index].classList.add("is-active");
//         fasilitas[index].classList.add("is-active");
//     });
// });

// =======================  Select2 =======================

$(document).ready(function () {
    $(".select2").select2({
        placeholder: "Pilihan",
        cache: false,
    });
});

// =======================  Trix Editor =======================
document.addEventListener("trix-file-accept", function (e) {
    e.preventDefault();
});
