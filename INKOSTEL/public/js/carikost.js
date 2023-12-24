  // navBar
  const navBar = document.querySelector("nav"),
  menuBtn = document.querySelectorAll(".menu-icon"),
  overlay = document.querySelector(".overlay");
  console.log(navBar, menuBtn, overlay);

  menuBtn.forEach(menuBtn => {
  menuBtn.addEventListener("click", () => {
    navBar.classList.toggle("open");
  });
  });

  overlay.addEventListener("click", () => {
  navBar.classList.remove("open");
  });


      // Event listener for search input
      document.getElementById('searchInput').addEventListener('keyup', (e) => {
      const searchData = e.target.value.toLowerCase();
      const filteredData = cardData.filter((item) => {
        return (
          item.title.toLowerCase().includes(searchData)
        );
      });
      displayItems(filteredData);
    });
    
    // Function to display filtered items
    function displayItems(data) {
      const cardContainer = document.querySelector("#conmain .row");
      cardContainer.innerHTML = ""; // Clear the existing items
    
      data.forEach((item) => {
        createCard(item);
      });
    }

  // Ambil semua tombol filter
  const filterButtons = document.querySelectorAll('.filter-button .btn');

  // Tambahkan event listener pada setiap tombol filter
  filterButtons.forEach(button => {
    button.addEventListener('click', () => {
      const filterType = button.getAttribute('data-filter'); 

      // Lakukan pemfilteran berdasarkan jenis filter
      const filteredData = cardData.filter(item => {
        if (filterType === 'semua') {
          return true; 
        } else if (filterType === 'putra') {
          return item.title.includes('Putra'); 
        } else if (filterType === 'putri') {
          return item.title.includes('Putri'); 
        } else if (filterType === 'termurah') {
          return parseInt(item.cardText1) <= 10; 
        }else if (filterType === 'terdekat') {
          return parseInt(item.cardText2) < 1000; 
        }
      });
      // Tampilkan data yang telah difilter
      displayItems(filteredData);
    });
  });

  // Select the bookmark icon element by its ID
  const bookmarkIcon = document.getElementById('bookmarkIcon');

  // Check if the element exists before adding the click event listener
  if (bookmarkIcon) {
    bookmarkIcon.addEventListener("click", () => {
      if (bookmarkIcon.classList.contains("bi-bookmark")) {
        bookmarkIcon.classList.remove("bi-bookmark");
        bookmarkIcon.classList.add("bi-bookmark-fill");
        handleBookmarkClick(data); // Panggil fungsi untuk menyimpan kartu yang dibookmark
      } else {
        bookmarkIcon.classList.remove("bi-bookmark-fill");
        bookmarkIcon.classList.add("bi-bookmark");
        handleRemoveBookmark(data); // Panggil fungsi untuk menghapus kartu yang dibookmark
      }
    });
  }

  // convert harga
  document.addEventListener("DOMContentLoaded", function() {
    // Mendapatkan NodeList dari semua elemen dengan class "card-text1"
    var cardText1Elements = document.querySelectorAll('.card-text1');

    // Loop melalui setiap elemen dan lakukan perubahan
    cardText1Elements.forEach(function(cardText1Element) {
        // Mendapatkan nilai dari atribut data-harga
        var hargaValue = parseFloat(cardText1Element.getAttribute('data-harga'));

        // Memperbarui nilai elemen dengan harga yang sudah diubah
        cardText1Element.textContent = formatHarga(hargaValue);
    });
  });

  // Fungsi untuk mengonversi harga
  function formatHarga(harga) {
      if (harga >= 1000000) {
          return (harga / 1000000)+ " jt/thn";
      } else {
          return harga + " /thn";
      }
  }


    // fungsi untuk mengetahui terdekat
    // Mendapatkan NodeList dari semua elemen dengan class "card-text2"
    var cardText2Elements = document.querySelectorAll('.card-text2');

    // Loop melalui setiap elemen dan lakukan perubahan
    cardText2Elements.forEach(function(cardText2Element) {
        // Mendapatkan nilai dari elemen
        var cardText2Value = parseFloat(cardText2Element.textContent);

        // Memeriksa dan mengupdate nilai sesuai kondisi
        if (cardText2Value >= 1000) {
            cardText2Element.textContent = (cardText2Value / 1000) + " KM";
        } else {
            cardText2Element.textContent = cardText2Value + " Meter";
        }
    });

    document.addEventListener("DOMContentLoaded", function () {
    // Ambil semua tombol filter
    const filterButtons = document.querySelectorAll('.filter-button .btn');

    // Tambahkan event listener pada setiap tombol filter
    filterButtons.forEach(button => {
        button.addEventListener('click', () => {
            const filterType = button.getAttribute('data-filter');

            // Lakukan pemfilteran berdasarkan jenis filter
            const cardItems = document.querySelectorAll('.card');

            cardItems.forEach(card => {
                const cardData = {
                    harga: parseFloat(card.querySelector('.card-text1').getAttribute('data-harga')),
                    jarak: parseInt(card.querySelector('.card-text2').textContent),
                    jenis: card.querySelector('.card-title').textContent.toLowerCase(),
                };

                if (filterType === 'semua' ||
                    (filterType === 'terdekat' && cardData.jarak < 1000) ||
                    (filterType === 'termurah' && cardData.harga <= 5000000) ||
                    (filterType === 'putra' && cardData.jenis.includes('putra')) ||
                    (filterType === 'putri' && cardData.jenis.includes('putri'))) {
                    card.style.display = 'block';
                } else {
                    card.style.display = 'none';
                }
            });
        });
    });
});



  

  
 
  

  



  

  



  

