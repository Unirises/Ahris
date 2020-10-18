<script src="{{asset('assets/vendor/jquery/dist/jquery.min.js')}}"></script>
  <script src="{{asset('assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('assets/vendor/js-cookie/js.cookie.js')}}"></script>
  <script src="{{asset('assets/vendor/jquery.scrollbar/jquery.scrollbar.min.js')}}"></script>
  <script src="{{asset('assets/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js')}}"></script>
  <script src="{{asset('assets/vendor/chart.js/dist/Chart.min.js')}}"></script>
  <script src="{{asset('assets/vendor/chart.js/dist/Chart.extension.js')}}"></script>
  <!-- Argon JS -->
  <script src="{{asset('assets/js/argon.js?v=1.1.0')}}"></script>
  <script src="https://js.pusher.com/7.0/pusher.min.js"></script>
  <script>

    // Enable pusher logging - don't include this in production
    Pusher.logToConsole = true;

    var pusher = new Pusher('d57cb0aa0b4f7b9ae97b', {
      cluster: 'ap1'
    });

    var channel = pusher.subscribe('my-channel');
    channel.bind('my-event', function(data) {
      alert(JSON.stringify(data));
    });
  </script>
  <script src="https://unpkg.com/bootstrap-table@1.18.0/dist/bootstrap-table.min.js"></script>
  <script
  src="https://browser.sentry-cdn.com/5.26.0/bundle.min.js"
  integrity="sha384-VGljl8BTZL6Py4DmlOaYmfkOwp8mD3PrmD2L+fN446PZpsrIHuDhX7mnV/L5KuNR"
  crossorigin="anonymous"
></script>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-180702852-1', {
  'cookieDomain': 'none'
});
  ga('send', 'pageview');

</script>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-180702852-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-180702852-1');
</script>
<script>

  $(document).ready(function () {
    $('#table-check-all-customer').click(function(){
      var checkboxes1 = document.querySelectorAll('input[name="check_contact_customer"]');
              for(let checkbox of checkboxes1){
                  checkbox.checked = this.checked;
            }

            var checkedBoxLength = document.querySelectorAll('input[name="check_contact_customer"]:checked').length;
              if(checkedBoxLength === 0 || checkedBoxLength > 1){
                var btnEdit = document.getElementById("contact_edit_customer");
                btnEdit.classList.remove("text-primary");
                btnEdit.classList.add("text-muted");
                btnEdit.classList.add("disabled");
                btnEdit.style.cursor = null;
              }
    });

    $('#table-check-all-supplier').click(function(){
      var checkboxes2 = document.querySelectorAll('input[name="check_contact_supplier"]');
              for(let checkbox of checkboxes2){
                  checkbox.checked = this.checked;
            }
            var checkedBoxLength = document.querySelectorAll('input[name="check_contact_supplier"]:checked').length;
              if(checkedBoxLength === 0 || checkedBoxLength > 1){
                var btnEdit = document.getElementById("contact_edit_supplier");
                btnEdit.classList.remove("text-primary");
                btnEdit.classList.add("text-muted");
                btnEdit.classList.add("disabled");
                btnEdit.style.cursor = null;
              }
    });

    $('#contact_edit').click(function() {
                    var checkedBoxLength = document.querySelectorAll('input[name="check_contact"]:checked').length;
                    if (checkedBoxLength === 1) {
                      var checkedBox = document.querySelector('input[name="check_contact"]:checked').value;
                      // alert('test');
                      window.location.href = checkedBox;
                    }
                  });


  });
</script>
