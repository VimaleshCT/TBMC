

<p id="description"><?= lang('App.description'); ?></p>
<p id="announcement"><?= lang('App.announcement'); ?></p>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function () {
        // Handle the language switch button click
        $('.lang-btn').on('click', function (e) {
            e.preventDefault();

            // Get the selected language from the data attribute
            var language = $(this).data('lang');

            // Send AJAX request to switch language
            $.ajax({
                url: "<?= base_url('language/switchLanguage'); ?>/" + language,
                method: "GET",
                dataType: "json",
                success: function (response) {
                    if (response.status === 'success') {
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