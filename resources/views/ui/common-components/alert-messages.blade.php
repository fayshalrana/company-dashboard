<span class="alert-msg">
    <svg width="24" height="24">
      <use href="#info-icon"></use>
    </svg>
    <span>Please Add Your Payout Details!</span>
    <a class="ms-auto" href="javascript:">Add Details</a>
</span>

<button type="button" class="btn btn-primary mt-3" id="liveToastBtn">Show live toast</button>

<div class="toast-container custom-success-toast">
  <div id="liveToast" class="toast" role="alert" aria-live="assertive" aria-atomic="true">
    <div class="toast-body">
      <img src="{{URL::asset('assets/img/svg/alert-circle.svg')}}"> 
      <span>Payout Details successfully added!</span>
    </div>
  </div>
</div>

<script>

document.getElementById('liveToastBtn').addEventListener('click', function () {
      const toastLiveExample = document.getElementById('liveToast');
      const toast = new bootstrap.Toast(toastLiveExample);
      toast.show();
    });
</script>