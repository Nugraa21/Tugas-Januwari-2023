// Contoh data anggota organisasi (dalam format JSON)
const anggotaOrganisasi = [
    {
        nama: "Fitra Putra Aldi Wijaya",
        jabatan: "Ketua Umum",
    },
    {
        nama: "Rohmat Cahyo Susilo",
        jabatan: "Wakil Ketua Umum",
    },
    {
        nama: "Yoga Saputra",
        jabatan: "Sekretaris"
    },
    
    // Anggota
];

    // Tampilan WEB
function tampilkanAnggota() {
    const anggotaList = document.getElementById("anggota-list");
    anggotaList.innerHTML = "";

    anggotaOrganisasi.forEach((anggota) => {
        const anggotaCard = document.createElement("div");
        anggotaCard.className = "anggota-card";
        anggotaCard.innerHTML = `
            <h2>${anggota.nama}</h2>
            <p>Jabatan: ${anggota.jabatan}</p>
        `;
        anggotaList.appendChild(anggotaCard);
    });
}

// Panggil fungsi untuk menampilkan data anggota saat halaman dimuat
tampilkanAnggota();
