// Daftar gejala penyakit THT
// Daftar gejala penyakit THT
const symptoms = [
  { name: 'Demam', id: 'fever' },
  { name: 'Sakit Kepala', id: 'headache' },
  { name: 'Nyeri saat Bicara atau Menelan', id: 'pain_speaking' },
  { name: 'Batuk', id: 'cough' },
  { name: 'Hidung Tersumbat', id: 'nasal_congestion' },
  { name: 'Nyeri Telinga', id: 'ear_pain' },
  { name: 'Nyeri Tenggorokan', id: 'sore_throat' },
  { name: 'Hidung Meler', id: 'runny_nose' },
  { name: 'Letih dan Lesu', id: 'fatigue' },
  { name: 'Mual dan Muntah', id: 'nausea_vomiting' },
  { name: 'Selaput Lendir Merah dan Bengkak', id: 'swollen_mucous_membrane' },
  { name: 'Ada Benjolan di Leher', id: 'neck_lump' },
  { name: 'Nyeri Leher', id: 'neck_pain' },
  { name: 'Pembengkakan Kelenjar Getah Bening', id: 'swollen_lymph_nodes' },
  { name: 'Pendarahan Hidung', id: 'nose_bleeding' },
  { name: 'Suara Serak', id: 'hoarseness' },
  { name: 'Bola Mata Bergerak tanpa Sadar', id: 'involuntary_eye_movement' },
  { name: 'Dahi Sakit', id: 'forehead_pain' },
  { name: 'Leher Bengkak', id: 'swollen_neck' },
  { name: 'Tuli', id: 'deafness' },
  { name: 'Ada yang Tumbuh di Mulut', id: 'growth_in_mouth' },
  { name: 'Air Liur Menetes', id: 'drooling' },
  { name: 'Berat Badan Turun', id: 'weight_loss' },
  { name: 'Bunyi Nafas Abnormal', id: 'abnormal_breathing_sound' },
  { name: 'Infeksi Sinus', id: 'sinus_infection' },
  { name: 'Nyeri antara Mata', id: 'pain_between_eyes' },
  { name: 'Nyeri Pinggir Hidung', id: 'pain_alongside_nose' },
  { name: 'Nyeri Pipi di Bawah Mata', id: 'cheek_pain_under_eye' },
  { name: 'Nyeri Wajah', id: 'facial_pain' },
  { name: 'Perubahan Kulit', id: 'skin_changes' },
  { name: 'Perubahan Suara', id: 'voice_changes' },
  { name: 'Radang Gendang Telinga', id: 'ear_drum_inflammation' },
  { name: 'Sakit Gigi', id: 'toothache' },
  { name: 'Serangan Vertigo', id: 'vertigo_attack' },
  { name: 'Telinga Berdenging', id: 'ear_ringing' },
  { name: 'Telinga Terasa Penuh', id: 'ear_fullness' },
  { name: 'Tenggorokan Gatal', id: 'sore_throat_itch' },
  { name: 'Tubuh Tak Seimbang', id: 'imbalance' },
];


// Aturan-aturan untuk diagnosis
const rules = [
  {
    id: 'rule1',
    symptomIds: ['sore_throat', 'cough'],
    disease: 'Infeksi Tenggorokan',
  },
  {
    id: 'rule2',
    symptomIds: ['cough', 'nasal_congestion'],
    disease: 'Flu',
  },
  // Tambahkan aturan lain di sini
];

// Fungsi untuk mendapatkan gejala yang dipilih oleh pengguna
function getSelectedSymptoms() {
  const selectedSymptoms = [];
  symptoms.forEach((symptom) => {
    const checkbox = document.getElementById(symptom.id);
    if (checkbox.checked) {
      selectedSymptoms.push(symptom.id);
    }
  });
  return selectedSymptoms;
}

// Fungsi untuk mendiagnosis penyakit berdasarkan gejala yang dipilih
function diagnose() {
  const selectedSymptoms = getSelectedSymptoms();
  const matchedRules = [];
  rules.forEach((rule) => {
    if (selectedSymptoms.every((symptom) => rule.symptomIds.includes(symptom))) {
      matchedRules.push(rule);
    }
  });

  if (matchedRules.length === 0) {
    console.log('Tidak ada diagnosis yang cocok');
    // Tampilkan pesan kepada pengguna bahwa tidak ada diagnosis yang cocok
  } else {
    console.log('Hasil Diagnosis:');
    matchedRules.forEach((rule) => {
      console.log(`- ${rule.disease}`);
      // Tampilkan hasil diagnosis kepada pengguna
    });
  }
}

// Fungsi untuk menambahkan checkbox gejala ke dalam halaman HTML
function renderSymptoms() {
  const container = document.getElementById('symptomsContainer');
  symptoms.forEach((symptom) => {
    const checkbox = document.createElement('input');
    checkbox.type = 'checkbox';
    checkbox.id = symptom.id;
    checkbox.name = 'symptoms';
    const label = document.createElement('label');
    label.appendChild(document.createTextNode(symptom.name));
    container.appendChild(checkbox);
    container.appendChild(label);
    container.appendChild(document.createElement('br'));
  });
}

// Panggil fungsi renderSymptoms saat halaman selesai dimuat
window.onload = function () {
  renderSymptoms();
};
