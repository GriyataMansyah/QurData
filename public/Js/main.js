
        document.addEventListener('DOMContentLoaded', function() {
            // Menangani klik tombol hapus
            document.querySelectorAll('.delete-icon').forEach(button => {
                button.addEventListener('click', function(event) {
                    event.preventDefault(); // Mencegah aksi default tombol
    
                    const id = this.getAttribute('data-id');
                    const deleteForm = document.getElementById('deleteForm');
                    const deleteIdInput = document.getElementById('deleteId');
    
                    // Tampilkan konfirmasi SweetAlert
                    Swal.fire({
                        title: 'Konfirmasi Penghapusan',
                        text: "Anda yakin ingin menghapus data ini?",
                        icon: 'warning',
                        showCancelButton: true,
                        confirmButtonColor: '#3085d6',
                        cancelButtonColor: '#d33',
                        confirmButtonText: 'Ya, Hapus!',
                        cancelButtonText: 'Batal'
                    }).then((result) => {
                        if (result.isConfirmed) {
                            // Setel ID ke input tersembunyi dalam form penghapusan
                            deleteIdInput.value = id;
    
                            // Setel action URL untuk form penghapusan
                            deleteForm.action = `/hapus-capaian/${id}`;
                            
                            // Submit form penghapusan
                            deleteForm.submit();
                        }
                    });
                });
            });
        });



// ALERT 
document.addEventListener('DOMContentLoaded', function() {
    document.getElementById('alert2').addEventListener('click', function(event) {
        event.preventDefault(); // Mencegah aksi default dari link

        // Menampilkan SweetAlert2
        Swal.fire({
            title: 'Harap Menunggu',
            text: 'Fitur Ini Menunggu Pengembangan Selanjutnya',
            timer: 2500, // Durasi dalam milidetik (2.5 detik)
            timerProgressBar: true, // Menampilkan bar progres
            showConfirmButton: false // Tidak menampilkan tombol konfirmasi
        });
    });
});

document.addEventListener('DOMContentLoaded', function() {
    document.getElementById('alert3').addEventListener('click', function(event) {
        event.preventDefault(); // Mencegah aksi default dari link

        // Menampilkan SweetAlert2
        Swal.fire({
            title: 'Harap Menunggu',
            text: 'Fitur Ini Menunggu Pengembangan Selanjutnya',
            timer: 2500, // Durasi dalam milidetik (2.5 detik)
            timerProgressBar: true, // Menampilkan bar progres
            showConfirmButton: false // Tidak menampilkan tombol konfirmasi
        });
    });
});

document.addEventListener('DOMContentLoaded', function() {
    document.getElementById('alert4').addEventListener('click', function(event) {
        event.preventDefault(); // Mencegah aksi default dari link

        // Menampilkan SweetAlert2
        Swal.fire({
            title: 'Harap Menunggu',
            text: 'Fitur Ini Menunggu Pengembangan Selanjutnya',
            timer: 2500, // Durasi dalam milidetik (2.5 detik)
            timerProgressBar: true, // Menampilkan bar progres
            showConfirmButton: false // Tidak menampilkan tombol konfirmasi
        });
    });
});

document.addEventListener('DOMContentLoaded', function() {
    document.getElementById('alert5').addEventListener('click', function(event) {
        event.preventDefault(); // Mencegah aksi default dari link

        // Menampilkan SweetAlert2
        Swal.fire({
            title: 'Harap Menunggu',
            text: 'Fitur Ini Menunggu Pengembangan Selanjutnya',
            timer: 2500, // Durasi dalam milidetik (2.5 detik)
            timerProgressBar: true, // Menampilkan bar progres
            showConfirmButton: false // Tidak menampilkan tombol konfirmasi
        });
    });
});

document.addEventListener('DOMContentLoaded', function() {
    document.getElementById('alert6').addEventListener('click', function(event) {
        event.preventDefault(); // Mencegah aksi default dari link

        // Menampilkan SweetAlert2
        Swal.fire({
            title: 'Harap Menunggu',
            text: 'Fitur Ini Menunggu Pengembangan Selanjutnya',
            timer: 2500, // Durasi dalam milidetik (2.5 detik)
            timerProgressBar: true, // Menampilkan bar progres
            showConfirmButton: false // Tidak menampilkan tombol konfirmasi
        });
    });
});

document.addEventListener('DOMContentLoaded', function() {
    document.getElementById('alert7').addEventListener('click', function(event) {
        event.preventDefault(); // Mencegah aksi default dari link

        // Menampilkan SweetAlert2
        Swal.fire({
            title: 'Harap Menunggu',
            text: 'Fitur Ini Menunggu Pengembangan Selanjutnya',
            timer: 2500, // Durasi dalam milidetik (2.5 detik)
            timerProgressBar: true, // Menampilkan bar progres
            showConfirmButton: false // Tidak menampilkan tombol konfirmasi
        });
    });
});

document.addEventListener('DOMContentLoaded', function() {
    document.getElementById('alert8').addEventListener('click', function(event) {
        event.preventDefault(); // Mencegah aksi default dari link

        // Menampilkan SweetAlert2
        Swal.fire({
            title: 'Harap Menunggu',
            text: 'Fitur Ini Menunggu Pengembangan Selanjutnya',
            timer: 2500, // Durasi dalam milidetik (2.5 detik)
            timerProgressBar: true, // Menampilkan bar progres
            showConfirmButton: false // Tidak menampilkan tombol konfirmasi
        });
    });
});

document.addEventListener('DOMContentLoaded', function() {
    document.getElementById('alert9').addEventListener('click', function(event) {
        event.preventDefault(); // Mencegah aksi default dari link

        // Menampilkan SweetAlert2
        Swal.fire({
            title: 'Harap Menunggu',
            text: 'Fitur Ini Menunggu Pengembangan Selanjutnya',
            timer: 2500, // Durasi dalam milidetik (2.5 detik)
            timerProgressBar: true, // Menampilkan bar progres
            showConfirmButton: false // Tidak menampilkan tombol konfirmasi
        });
    });
});

document.addEventListener('DOMContentLoaded', function() {
    document.getElementById('alert10').addEventListener('click', function(event) {
        event.preventDefault(); // Mencegah aksi default dari link

        // Menampilkan SweetAlert2
        Swal.fire({
            title: 'Harap Menunggu',
            text: 'Fitur Ini Menunggu Pengembangan Selanjutnya',
            timer: 2500, // Durasi dalam milidetik (2.5 detik)
            timerProgressBar: true, // Menampilkan bar progres
            showConfirmButton: false // Tidak menampilkan tombol konfirmasi
        });
    });
});

document.addEventListener('DOMContentLoaded', function() {
    document.getElementById('alert11').addEventListener('click', function(event) {
        event.preventDefault(); // Mencegah aksi default dari link

        // Menampilkan SweetAlert2
        Swal.fire({
            title: 'Harap Menunggu',
            text: 'Fitur Ini Menunggu Pengembangan Selanjutnya',
            timer: 2500, // Durasi dalam milidetik (2.5 detik)
            timerProgressBar: true, // Menampilkan bar progres
            showConfirmButton: false // Tidak menampilkan tombol konfirmasi
        });
    });
});

document.addEventListener('DOMContentLoaded', function() {
    document.getElementById('alert`12').addEventListener('click', function(event) {
        event.preventDefault(); // Mencegah aksi default dari link

        // Menampilkan SweetAlert2
        Swal.fire({
            title: 'Harap Menunggu',
            text: 'Fitur Ini Menunggu Pengembangan Selanjutnya',
            timer: 2500, // Durasi dalam milidetik (2.5 detik)
            timerProgressBar: true, // Menampilkan bar progres
            showConfirmButton: false // Tidak menampilkan tombol konfirmasi
        });
    });
});

document.addEventListener('DOMContentLoaded', function() {
    document.getElementById('alert13').addEventListener('click', function(event) {
        event.preventDefault(); // Mencegah aksi default dari link

        // Menampilkan SweetAlert2
        Swal.fire({
            title: 'Harap Menunggu',
            text: 'Fitur Ini Menunggu Pengembangan Selanjutnya',
            timer: 2500, // Durasi dalam milidetik (2.5 detik)
            timerProgressBar: true, // Menampilkan bar progres
            showConfirmButton: false // Tidak menampilkan tombol konfirmasi
        });
    });
});

document.addEventListener('DOMContentLoaded', function() {
    document.getElementById('alert14').addEventListener('click', function(event) {
        event.preventDefault(); // Mencegah aksi default dari link

        // Menampilkan SweetAlert2
        Swal.fire({
            title: 'Harap Menunggu',
            text: 'Fitur Ini Menunggu Pengembangan Selanjutnya',
            timer: 2500, // Durasi dalam milidetik (2.5 detik)
            timerProgressBar: true, // Menampilkan bar progres
            showConfirmButton: false // Tidak menampilkan tombol konfirmasi
        });
    });
});
// <!-- =========== MENYEMBUNYIKAN DATA DARI DATA MASTER  ================== -->
document.addEventListener('DOMContentLoaded', () => {
  const cards = document.querySelectorAll('.card2');
  const backButtons = document.querySelectorAll('.back-btn');
  
  cards.forEach(card => {
      card.addEventListener('click', () => {
          const targetId = card.id;
          
          // Menyembunyikan semua header
          document.querySelectorAll('.details').forEach(detail => {
              detail.classList.add('hidden');
          });

          // Menampilkan header sesuai dengan card yang diklik
          if (targetId) {
              const targetDetail = document.querySelector(`#${targetId}-header`);
              if (targetDetail) {
                  targetDetail.classList.remove('hidden');
                  targetDetail.scrollIntoView({ behavior: 'smooth' });
              }
          }
      });
  });

  backButtons.forEach(button => {
      button.addEventListener('click', () => {
          // Menampilkan menu utama
          document.querySelectorAll('.details').forEach(detail => {
              detail.classList.add('hidden');
          });
          document.querySelector('.details').classList.remove('hidden');
      });
  });
});

// <!-- =========== NOMOR RANDOM UNTUK NOMOR PENGAJUAN  ================== -->
function generateRandomNumber() {
  return Math.floor(100000000000 + Math.random() * 900000000000);
}

// Menetapkan nomor acak ke input saat halaman dimuat
document.addEventListener('DOMContentLoaded', function() {
  var nomorInput = document.getElementById('nomor-input');
  nomorInput.value = generateRandomNumber();
});

// <!-- =========== MENAMPILKAN HALAMAN SETELAH SELESAI DILOAD  ================== -->
window.onload = function() {
  document.body.style.display = 'block';
}

// <!-- ====================== KELUAR DARI APLIKASI / LOG OUT ==================== -->
document.addEventListener('DOMContentLoaded', function() {
  // Menangani klik tombol delete
  document.getElementById('log_out').addEventListener('click', function() {
      Swal.fire({
          title: "Apakah Anda Yakin ?",
          text: "Anda Akan Keluar Dari Akun Ini ??",
          icon: "warning",
          showCancelButton: true,
          confirmButtonColor: "#d33",
          cancelButtonColor: "#333",
          confirmButtonText: "Keluar !!"
      }).then((result) => {
          if (result.isConfirmed) {
              Swal.fire({
                  title: "Keluar!",
                  text: "Anda Telah Keluar",
                  icon: "success"
              });
              window.location.href="/";
          }
      });
  });
});


// <!-- ====================== BERTANYA SEBELUM KIRIM==================== -->
document.addEventListener('DOMContentLoaded', function() {
  var link = document.getElementById('tanyak');
  var hiddenButton = document.getElementById('tanyak2');
  
  link.addEventListener('click', function(event) {
      event.preventDefault(); // Mencegah aksi default dari <a>
      
      Swal.fire({
          title: "Apakah Anda Yakin?",
          text: "Tindakan Ini Akan Menyimpan Informasi Dokumen BC 3.0!",
          icon: "warning",
          showCancelButton: true,
          confirmButtonColor: "green",
          cancelButtonColor: "#333",
          confirmButtonText: "Simpan!",
          cancelButtonText: "Batal"
      }).then((result) => {
          if (result.isConfirmed) {
              Swal.fire({
                  title: "Berhasil!",
                  text: "Informasi Telah Disimpan",
                  icon: "success"
              }).then(() => {
                  hiddenButton.click(); // Trigger klik pada tombol tersembunyi
              });
          }
      });
  });
});

// <!-- ====================== FITUR BELUM TERSEDIA ==================== -->
document.addEventListener('DOMContentLoaded', function() {
  // Menangani klik tombol lock
  document.getElementById('lock').addEventListener('click', function() {
      Swal.fire({
          title: "Fitur Belum Tersedia",
          text: "Fitur ini masih dalam pengembangan dan belum tersedia saat ini.",
          icon: "info",
          confirmButtonColor: "#3085d6",
          confirmButtonText: "OK"
      });
  });
});

// <!-- ====================== FITUR BELUM TERSEDIA ==================== -->
document.addEventListener('DOMContentLoaded', function() {
  // Menangani klik tombol lock
  document.getElementById('lock2').addEventListener('click', function() {
      Swal.fire({
          title: "Fitur Belum Tersedia",
          text: "Fitur ini masih dalam pengembangan dan belum tersedia saat ini.",
          icon: "info",
          confirmButtonColor: "#3085d6",
          confirmButtonText: "OK"
      });
  });
});

// <!-- ====================== FITUR BELUM TERSEDIA ==================== -->
document.addEventListener('DOMContentLoaded', function() {
  // Menangani klik tombol lock
  document.getElementById('lock3').addEventListener('click', function() {
      Swal.fire({
          title: "Fitur Belum Tersedia",
          text: "Fitur ini masih dalam pengembangan dan belum tersedia saat ini.",
          icon: "info",
          confirmButtonColor: "#3085d6",
          confirmButtonText: "OK"
      });
  });
});

// <!-- ====================== FITUR BELUM TERSEDIA ==================== -->
document.addEventListener('DOMContentLoaded', function() {
  // Menangani klik tombol lock
  document.getElementById('lock4').addEventListener('click', function() {
      Swal.fire({
          title: "Fitur Belum Tersedia",
          text: "Fitur ini masih dalam pengembangan dan belum tersedia saat ini.",
          icon: "info",
          confirmButtonColor: "#3085d6",
          confirmButtonText: "OK"
      });
  });
});

// <!-- ====================== FITUR BELUM TERSEDIA ==================== -->
document.addEventListener('DOMContentLoaded', function() {
  // Menangani klik tombol lock
  document.getElementById('lock5').addEventListener('click', function() {
      Swal.fire({
          title: "Fitur Belum Tersedia",
          text: "Fitur ini masih dalam pengembangan dan belum tersedia saat ini.",
          icon: "info",
          confirmButtonColor: "#3085d6",
          confirmButtonText: "OK"
      });
  });
});

// <!-- ====================== FITUR BELUM TERSEDIA ==================== -->
document.addEventListener('DOMContentLoaded', function() {
  // Menangani klik tombol lock
  document.getElementById('lock6').addEventListener('click', function() {
      Swal.fire({
          title: "Fitur Belum Tersedia",
          text: "Fitur ini masih dalam pengembangan dan belum tersedia saat ini.",
          icon: "info",
          confirmButtonColor: "#3085d6",
          confirmButtonText: "OK"
      });
  });
});


// <!-- ========================= NAVIGASI SIDEBAR AKTIF ==================== -->
let list = document.querySelectorAll(".navigation li");

function activeLink() {
  list.forEach((item) => {
    item.classList.remove("hovered");
  });
  this.classList.add("hovered");
}

list.forEach((item) => item.addEventListener("mouseover", activeLink));

// Menu Toggle
let toggle = document.querySelector(".toggles");
let navigation = document.querySelector(".navigation");
let main = document.querySelector(".main");

toggle.onclick = function () {
  navigation.classList.toggle("active");
  main.classList.toggle("active");
};





// <!-- ========================= MENAMPILKAN PREVIEW PROFILE ==================== -->
function previewImage(event) {
  var reader = new FileReader();
  reader.onload = function(){
      var output = document.getElementById('preview');
      output.src = reader.result;
      output.style.display = 'block';
  }
  reader.readAsDataURL(event.target.files[0]);
}



// <!-- ===================== TAMPILKAN ANDA ADALAH SUPER ADMIN ==================== -->
document.addEventListener('DOMContentLoaded', function() {
  // Menangani klik pada elemen dengan ID `notice-one`
  document.getElementById('notice-one').addEventListener('click', function() {
      Swal.fire("Anda Adalah Super Admin !");
  });
});

// <!-- ===================== TAMPILKAN ANDA ADALAH ADMIN ========================== -->
document.addEventListener('DOMContentLoaded', function() {
  // Menangani klik pada elemen dengan ID `notice-one`
  document.getElementById('notice-two').addEventListener('click', function() {
      Swal.fire("Anda Adalah Admin !");
  });
});

// <!-- ===================== TAMPILKAN ANDA ADALAH GURU ========================== -->
document.addEventListener('DOMContentLoaded', function() {
  // Menangani klik pada elemen dengan ID `notice-one`
  document.getElementById('notice-three').addEventListener('click', function() {
      Swal.fire("Anda Adalah Guru !");
  });
});

// <!-- =========== STYLING PERUBAHAN SELECT PADA ABSENSI ======================== -->
function updateSelectColor(select) {
  const selectedOption = select.options[select.selectedIndex];
  select.className = selectedOption.className;
}

// Initialize the select element with the correct color
document.addEventListener("DOMContentLoaded", function() {
  const select = document.getElementById('attendance');
  updateSelectColor(select);
});

// <!-- =========== NAMBAH ROW DALAM CAPAIAN INDIKATOR ======================== -->
function addRow() {
  const table = document.getElementById('dataTable').getElementsByTagName('tbody')[0];
  const newRow = document.createElement('tr');

  newRow.innerHTML = `
    <td><input placeholder="Nama Indikator" class="input-form"></input></td>
       <td>
         <select onchange="updateSelectColor(this)">
            <option>..</option>
           <option class="status-hadir" value="Tercapai">Tercapai</option>
             <option class="status-ga-hadir" value="Tidak">Tidak</option>
           </select>
            </td>
             <td>
             <textarea id="coolTextarea" class="form-control custom-textarea" rows="4"></textarea>
         </td>
              <td>
              <button class="btn btn-danger" onclick="deleteRow(this)">Hapus</button>
           </td>
  `;

  table.appendChild(newRow);
}


// <!-- =========== HAPUS ROW DALAM CAPAIAN INDIKATOR =========================== -->
function deleteRow(button) {
  const row = button.parentNode.parentNode; 
  row.remove();
}

// <!-- =========== HANYA BISA MENGISI DENGAN ANGKA ============================= -->
function allowNumbersOnly(event) {
  const input = event.target;
  const value = input.value;

  // Hapus semua karakter yang bukan angka
  const sanitizedValue = value.replace(/[^0-9]/g, '');

  // Update nilai input dengan nilai yang telah disanitasi
  input.value = sanitizedValue;
}

// <!-- ====================== HAPUS DATA MURID ================================= -->
const deleteIcons = document.querySelectorAll('.delete-icons');

deleteIcons.forEach(icon => {
    icon.addEventListener('click', function() {
        const id = icon.getAttribute('data-id');

        Swal.fire({
            title: 'Apakah Anda yakin?',
            text: "Anda tidak akan bisa mengembalikan data ini!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Ya, hapus saja!'
        }).then((result) => {
            if (result.isConfirmed) {
                document.querySelector(`form[data-id="${id}"]`).submit();

                // Show success message
                Swal.fire({
                    title: 'Berhasil!',
                    text: 'Berhasil menghapus data.',
                    icon: 'success',
                    confirmButtonText: 'OK'
                });
            }
        });
    });
});

// <!-- ======== MEMUNCULKAN INPUTAN PASSWORD PADA SETTINGS ======================= -->
function showPasswordFields() {
  // Sembunyikan label dan input password lama
  document.getElementById('passwordSection').style.display = 'none';

  // Dapatkan elemen container untuk menambahkan kolom baru
  const container = document.getElementById('newPasswordFields');

  // Buat kolom input untuk password baru
  const newPasswordField = document.createElement('div');
  newPasswordField.className = 'input-group has-validation inputa';
  newPasswordField.style.position = 'relative';
  newPasswordField.innerHTML = `
      <label class="CustomText-One">Masukkan Password Baru</label>
      <div class="input-group has-validation inputa">
          <span class="input-group-text"><ion-icon name="lock-closed-outline"></ion-icon></span>
          <div class="form-floating">
              <input type="password" class="form-control CustomInput_One" name="new_password" id="newPassword" required>
              <label for="newPassword">New Password</label>
          </div>
      </div>
  `;

  // Buat kolom input untuk konfirmasi password lama
  const confirmPasswordField = document.createElement('div');
  confirmPasswordField.className = 'input-group has-validation inputa';
  confirmPasswordField.style.position = 'relative';
  confirmPasswordField.innerHTML = `
      <label class="CustomText-One">Konfirmasi Password Lama</label>
      <div class="input-group has-validation inputa">
          <span class="input-group-text"><ion-icon name="lock-open-outline"></ion-icon></span>
          <div class="form-floating">
              <input type="password" class="form-control CustomInput_One" name="confirm_password" id="confirmPassword" required>
              <label for="confirmPassword">Confirm Password</label>
          </div>
      </div>
  `;

  // Tambahkan kolom baru ke dalam container
  container.appendChild(newPasswordField);
  container.appendChild(confirmPasswordField);
}



// <!-- ======== MEMAKSA GURU UNTUK MENGISI JENIS KELAMIN MURID ===================== -->
function validateForm() {
  var genderSelect = document.getElementById('gender');
  var selectedValue = genderSelect.value;
  
  // Jika pengguna memilih opsi yang valid
  if (selectedValue !== '' && selectedValue !== 'Pilih Gender Murid') {
      return true; // Izinkan pengiriman formulir
  } else {
      // Tampilkan SweetAlert
      Swal.fire({
          icon: 'error',
          title: 'Oops...',
          text: 'Silakan pilih jenis kelamin murid!',
          confirmButtonColor: '#3085d6',
          cancelButtonColor: '#d33',
          confirmButtonText: 'OK'
      });
      return false; // Mencegah pengiriman formulir
  }
}

// <!-- ======== MEMAKSA ADMIN UNTUK MENGISI JENIS KELAMIN GURU ===================== -->
function validateFormTeach() {
  var genderSelect = document.getElementById('gender');
  var selectedValue = genderSelect.value;
  
  // Jika pengguna memilih opsi yang valid
  if (selectedValue !== '' && selectedValue !== 'Pilih Gender Guru') {
      return true; // Izinkan pengiriman formulir
  } else {
      // Tampilkan SweetAlert
      Swal.fire({
          icon: 'error',
          title: 'Oops...',
          text: 'Silakan pilih jenis kelamin Guru!',
          confirmButtonColor: '#3085d6',
          cancelButtonColor: '#d33',
          confirmButtonText: 'OK'
      });
      return false; // Mencegah pengiriman formulir
  }
}

// <!-- ======== MEMAKSA SUPERADMIN UNTUK MENGISI JENIS KELAMIN ADMIN ===================== -->
function validateFormAdmin() {
  var genderSelect = document.getElementById('gender');
  var selectedValue = genderSelect.value;
  
  // Jika pengguna memilih opsi yang valid
  if (selectedValue !== '' && selectedValue !== 'Pilih Gender Admin') {
      return true; // Izinkan pengiriman formulir
  } else {
      // Tampilkan SweetAlert
      Swal.fire({
          icon: 'error',
          title: 'Oops...',
          text: 'Silakan pilih jenis kelamin Admin!',
          confirmButtonColor: '#3085d6',
          cancelButtonColor: '#d33',
          confirmButtonText: 'OK'
      });
      return false; // Mencegah pengiriman formulir
  }
}


// <!-- ======================== TAMBAH INPUTAN CAPAIAN =========================== -->
   document.addEventListener('DOMContentLoaded', function() {
        const addButton = document.getElementById('addDataButton');
        const inputContainer = document.getElementById('inputContainer');

        addButton.addEventListener('click', function() {
            const newInput = document.createElement('div');
            newInput.classList.add('input-group');
            newInput.innerHTML = `
                <input type="text" class="form-control custom-input" name="new_data[]" placeholder="Masukkan data baru">
                <button type="button" class="btn btn-danger delete-icon" onclick="removeElement(this)"><ion-icon name="trash-outline"></ion-icon></button>
            `;
            inputContainer.appendChild(newInput);
        });

        window.removeElement = function(button) {
            button.parentElement.remove();
        };
    });

// <!-- ========================== MENAMPILKAN SESUAI ID ========================= -->
document.getElementById('closeButton').addEventListener('click', function() {
  Swal.fire({
      icon: 'success',
      title: 'Berhasil!',
      text: 'Tombol Tutup telah ditekan',
      showConfirmButton: true, 
      timer: 2000 
  });
});


// <!-- ======================== KONFIRMASI PENGHAPUSAN ========================== -->
function confirmDelete() {
  Swal.fire({
      title: 'Anda yakin?',
      text: "Anda akan menghapus semua data Capaian. Proses ini tidak dapat dibatalkan!",
      icon: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#d33',
      cancelButtonColor: '#3085d6',
      confirmButtonText: 'Ya, hapus semua!',
      cancelButtonText: 'Batal'
  }).then((result) => {
      if (result.isConfirmed) {
          document.getElementById('hapusSemuaForm').submit();
      }
  });
}

// <!-- ============ KONFIRMASI PENGHAPUSAN CAPAIAN PADA MURID===================== -->
function confirmThis() {
  Swal.fire({
      title: 'Anda yakin?',
      text: "Anda akan menghapus semua data Capaian Pada Murid Ini. Proses ini tidak dapat dibatalkan!",
      icon: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#d33',
      cancelButtonColor: '#3085d6',
      confirmButtonText: 'Ya, hapus semua!',
      cancelButtonText: 'Batal'
  }).then((result) => {
      if (result.isConfirmed) {
          document.getElementById('deleteForm').submit();
      }
  });
}

// // <!-- ============ KONFIRMASI PENGHAPUSAN DATA CAPAIAN ============================ -->
// function confirmThisForm() {
//   Swal.fire({
//       title: 'Anda yakin?',
//       text: "Anda akan menghapus data Capaian. Proses ini tidak dapat dibatalkan!",
//       icon: 'warning',
//       showCancelButton: true,
//       confirmButtonColor: '#d33',
//       cancelButtonColor: '#3085d6',
//       confirmButtonText: 'Ya, hapus semua!',
//       cancelButtonText: 'Batal'
//   }).then((result) => {
//       if (result.isConfirmed) {
//           document.getElementById('TekanIni').click();
//       }
//   });
// }


// // <!-- ======================= GANTI WATNA PADA ABSENSI ============================ -->
// function updateSelectColor(selectElement) {
//   if (selectElement.value == "Hadir") {
//       selectElement.className = "status-hadir";
//   } else if (selectElement.value == "Tidak Hadir") {
//       selectElement.className = "status-ga-hadir";
//   } else if (selectElement.value == "izin") {
//       selectElement.className = "status-izin";
//   } else {
//       selectElement.className = "";
//   }
// }

// // <!-- ================ MEMBUKA INPUTAN EDIT DATA CAPAIAN ========================== -->
// function tambahInput(id) {
//   const editButton = document.getElementById(`visible-${id}`);
//   const changeDiv = document.getElementById(`change-${id}`);

//   // Hide the edit button
//   editButton.style.display = 'none';

//   // Show the form div
//   changeDiv.style.display = 'flex';
// }

// // |-----------------------------------------------------------------------------------------|
// // |-----UNTUK MENAMPILKAN HALAMAN OUTPUT DOKUMEN TERLETAK PADA VIEW GURU/CATATANCAPAIAN-----|
// // |-----------------------------------------------------------------------------------------|
