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

// Loop through each delete icon to add an event listener
deleteIcons.forEach(icon => {
    icon.addEventListener('click', function() {
        const id = icon.getAttribute('data-id');

        // Show SweetAlert for confirmation
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
                // Find the form that corresponds to this delete icon and submit it
                document.querySelector(`form[data-id="${id}"]`).submit();
            }
        });
    });
});