// <!-- =========== MENAMPILKAN HALAMAN SETELAH SELESAI DILOAD  ================== -->
window.onload = function() {
  document.body.style.display = 'block';
}

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
let toggle = document.querySelector(".toggle");
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
const deleteIcons = document.querySelectorAll('.delete-icon');

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

// <!-- ======================== TAMBAH INPUTAN CAPAIAN =========================== -->
document.addEventListener('DOMContentLoaded', function() {
  const addDataButton = document.getElementById('addDataButton');
  const inputContainer = document.getElementById('inputContainer');
  let inputCount = 0;

  // Function to add event listener for delete button
  function addDeleteEvent(deleteButton) {
      deleteButton.addEventListener('click', function() {
          inputContainer.removeChild(deleteButton.parentElement);
      });
  }

  addDataButton.addEventListener('click', function() {
      inputCount++;
      const newInputGroup = document.createElement('div');
      newInputGroup.classList.add('form-group', 'custom-form-group', 'd-flex', 'align-items-center', 'margin-one');

      newInputGroup.innerHTML = `
          <label for="capaian${inputCount}" class="custom-label"></label>
          <input type="text" class="form-control custom-input" id="capaian${inputCount}" placeholder="Masukkan Nama Capaian" name="capaian[]" required>
          <button type="button" class="btn btn-danger delete-icon" data-id="${inputCount}"><ion-icon name="trash-outline"></ion-icon></button>
      `;

      inputContainer.appendChild(newInputGroup);

      // Add event listener to the new delete button
      const newDeleteIcon = newInputGroup.querySelector('.delete-icon');
      addDeleteEvent(newDeleteIcon);
  });
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

// <!-- ============ KONFIRMASI PENGHAPUSAN DATA CAPAIAN ============================ -->
function confirmThisForm() {
  Swal.fire({
      title: 'Anda yakin?',
      text: "Anda akan menghapus data Capaian. Proses ini tidak dapat dibatalkan!",
      icon: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#d33',
      cancelButtonColor: '#3085d6',
      confirmButtonText: 'Ya, hapus semua!',
      cancelButtonText: 'Batal'
  }).then((result) => {
      if (result.isConfirmed) {
          document.getElementById('TekanIni').click();
      }
  });
}


// <!-- ======================= GANTI WATNA PADA ABSENSI ============================ -->
function updateSelectColor(selectElement) {
  if (selectElement.value == "Hadir") {
      selectElement.className = "status-hadir";
  } else if (selectElement.value == "Tidak Hadir") {
      selectElement.className = "status-ga-hadir";
  } else if (selectElement.value == "izin") {
      selectElement.className = "status-izin";
  } else {
      selectElement.className = "";
  }
}

// <!-- ================ MEMBUKA INPUTAN EDIT DATA CAPAIAN ========================== -->
function tambahInput(id) {
  const editButton = document.getElementById(`visible-${id}`);
  const changeDiv = document.getElementById(`change-${id}`);

  // Hide the edit button
  editButton.style.display = 'none';

  // Show the form div
  changeDiv.style.display = 'flex';
}


function printPage() {
  var url = "{{ route('guru.output') }}";

  var xhr = new XMLHttpRequest();
  xhr.open('GET', url);
  xhr.responseType = 'document'; 

  xhr.onload = function() {
      if (xhr.status === 200) {
          var newDoc = xhr.response;
          
          // Membuat jendela cetak sementara
          var printWindow = window.open('', '_blank');
          printWindow.document.open();
          printWindow.document.write(newDoc.documentElement.innerHTML);
          printWindow.document.close();
          
          // Mencetak dokumen di jendela cetak sementara
          printWindow.onload = function() {
              printWindow.print();
              printWindow.close();
              
              // Tampilkan pemberitahuan setelah pencetakan selesai
              Swal.fire({
                  icon: 'success',
                  title: 'Halaman dicetak',
                  text: 'Halaman ini dicetak tanpa memindahkan Anda dari halaman saat ini.',
              });
          };
      } else {
          Swal.fire({
              icon: 'error',
              title: 'Oops...',
              text: 'Gagal memuat halaman untuk mencetak!',
          });
      }
  };

  xhr.send();

  function submitFormAbsensi(){
    document.getElementById('hiddenSubmitButtonAbsensi').click();
  };
}