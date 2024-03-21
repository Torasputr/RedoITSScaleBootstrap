function closePopup() {
    var popupOverlay = document.getElementById("popupOverlay");
    popupOverlay.style.display = "none";
}

document.addEventListener("DOMContentLoaded", function() {
    var popupOverlay = document.getElementById("popupOverlay");
    popupOverlay.style.display = "block";
});

document.addEventListener("DOMContentLoaded", function() {
    function showMilestoneText(year) {
        const texts = document.querySelectorAll('.milestone-text');
        texts.forEach(text => {
            text.classList.add('d-none');
        });
        document.getElementById(`${year}-text`).classList.remove('d-none');
    }
    const milestoneButtons = document.querySelectorAll('.milestone-button');
    milestoneButtons.forEach(milestoneButtons => {
        milestoneButtons.addEventListener('click', function() {
            const year = milestoneButtons.id.split('-')[0];
            showMilestoneText(year);
        });
    });
});

function visiMisi() {
    const visiButton = document.querySelector('.visi-button');
    const misiButton = document.querySelector('.misi-button');
    const visiText = document.querySelector('.visi-text');
    const misiText = document.querySelector('.misi-text');

    // Function to show the Visi text and hide the Misi text
    function showVisi() {
        visiText.classList.remove('d-none');
        misiText.classList.add('d-none');
    }

    // Function to show the Misi text and hide the Visi text
    function showMisi() {
        misiText.classList.remove('d-none');
        visiText.classList.add('d-none');
    }

    // Add click event listener to the Visi button
    visiButton.addEventListener('click', showVisi);

    // Add click event listener to the Misi button
    misiButton.addEventListener('click', showMisi);
}

document.addEventListener("DOMContentLoaded", visiMisi);

document.addEventListener("DOMContentLoaded", function() {
    const glcButton = document.getElementById('glc-button');
    const cikarangButton = document.getElementById('cikarang-button');
    const glcMap = document.getElementById('glc-map');
    const cikarangMap = document.getElementById('cikarang-map');

    glcButton.addEventListener('click', function() {
        glcMap.classList.remove('d-none');
        cikarangMap.classList.add('d-none');
    });

    cikarangButton.addEventListener('click', function() {
        cikarangMap.classList.remove('d-none');
        glcMap.classList.add('d-none');
    });
})

function showPopup() {
    var popup = document.getElementById('popup');
    popup.style.display = 'block';
    // You can add more code here to customize the popup behavior
    // For example, you can use setTimeout to automatically close the popup after a certain time
    // setTimeout(function() {
    //     popup.style.display = 'none';
    // }, 5000); // Close the popup after 5 seconds
    return false; // Prevent the default behavior of the link
}
