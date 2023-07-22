function submit() {
				
    var nilai = document.getElementById("nilai").value;
    
    var validasiAngka = /^[0-9]+$/;
    if(nilai.match(validasiAngka)){
        if(nilai >= 96 && nilai <= 100){
            document.getElementById("predikat").value = "A";
        }else if(nilai >= 91 && nilai <= 95){
            document.getElementById("predikat").value = "A-";
        }else if(nilai >= 86 && nilai <= 90){
            document.getElementById("predikat").value = "B+";
        }else if(nilai >= 81 && nilai <= 85){
            document.getElementById("predikat").value = "B";
        }else if(nilai >= 75 && nilai <= 80){
            document.getElementById("predikat").value = "B-";
        }else if(nilai >= 70 && nilai <= 74){
            document.getElementById("predikat").value = "C+";
        }else if(nilai >= 65 && nilai <= 69){
            document.getElementById("predikat").value = "C";
        }else if(nilai >= 60 && nilai <= 64){
            document.getElementById("predikat").value = "C-";
        }else if(nilai >= 55 && nilai <= 59){
            document.getElementById("predikat").value = "D+";
        }else if(nilai >= 0 && nilai <= 54){
            document.getElementById("predikat").value = "D";
        }else{
            alert("Nilai yang dimasukkan salah.\nRentang nilai (0-100)!")
            nilai="";
            nilai.focus();
            return false;
        }
    }else{
      alert("Nilai yang anda masukkan Salah!\nFormat wajib angka!");
      nilai.value="";
      nilai.focus();
      return false;
    }   
}