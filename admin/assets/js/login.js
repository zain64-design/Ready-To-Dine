$(document).ready(function () {
    $('#allergies-toggle').click(function() {
        $('#allergies').toggle();
      });
      
      $('#dietary-preferences-toggle').click(function() {
        $('#dietary-preferences').toggle();
      });
      
      $('.allergy-options .allergy-actions .clear-btn').on('click', function() {
        $('.form-check-input').prop('checked', false);
      });
      
      $('.allergy-options .allergy-actions .ok-btn').click(function() {
        $('.allergy-options').hide();
      });
      
      function togglePasswordVisibility() {
        const $passwordInput = $('#passwordInput');
        const $toggleEyeIcon = $('#toggleEyeIcon');
      
        if ($passwordInput.attr('type') === 'password') {
            $passwordInput.attr('type', 'text');
            $toggleEyeIcon.removeClass('fa-eye').addClass('fa-eye-slash');
        } else {
            $passwordInput.attr('type', 'password');
            $toggleEyeIcon.removeClass('fa-eye-slash').addClass('fa-eye');
        }
      }
      
      function togglePasswordVisibility() {
        const $passwordInput = $('#passwordInput');
        const $toggleEyeIcon = $('#toggleEyeIcon');
      
        if ($passwordInput.attr('type') === 'password') {
            $passwordInput.attr('type', 'text');
            $toggleEyeIcon.removeClass('fa-eye').addClass('fa-eye-slash');
        } else {
            $passwordInput.attr('type', 'password');
            $toggleEyeIcon.removeClass('fa-eye-slash').addClass('fa-eye');
        }
      }
      
      function toggleConfirmPasswordVisibility() {
        const $confirmPasswordInput = $('#confirmPasswordInput');
        const $toggleConfirmEyeIcon = $('#toggleConfirmEyeIcon');
      
        if ($confirmPasswordInput.attr('type') === 'password') {
            $confirmPasswordInput.attr('type', 'text');
            $toggleConfirmEyeIcon.removeClass('fa-eye').addClass('fa-eye-slash');
        } else {
            $confirmPasswordInput.attr('type', 'password');
            $toggleConfirmEyeIcon.removeClass('fa-eye-slash').addClass('fa-eye');
        }
      }
});