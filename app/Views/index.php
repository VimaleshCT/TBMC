<section class="banner">
    <h1>I ❤️ TAMBARAM</h1>
</section>



<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function () {
        // Set initial state based on session language
        var currentLang = '<?= session()->get('lang') ?? 'en' ?>';
        if (currentLang === 'ta') {
            $('#languageToggle').prop('checked', true); // Set Tamil as active
            $('#languageLabelLeft').text('தமிழ்');
            $('#languageLabelRight').text('English');
        }

        // Handle the language toggle
        $('#languageToggle').on('change', function () {
            var selectedLang = $(this).is(':checked') ? 'ta' : 'en'; // Determine selected language

            // Send AJAX request to switch language
            $.ajax({
                url: "<?= base_url('language/switchLanguage'); ?>/" + selectedLang,
                method: "GET",
                dataType: "json",
                success: function (response) {
                    if (response.status === 'success') {
                        // Update label text based on the selected language
                        if (selectedLang === 'ta') {
                            $('#languageLabelLeft').text('தமிழ்');
                            $('#languageLabelRight').text('English');
                        } else {
                            $('#languageLabelLeft').text('English');
                            $('#languageLabelRight').text('தமிழ்');
                        }

                        // Reload the content to apply the language change
                        location.reload(); // Reload the current page to reflect the language change
                    }
                },
                error: function (xhr, status, error) {
                    console.error("Error occurred while switching language:", error);
                }
            });
        });
    });
</script>