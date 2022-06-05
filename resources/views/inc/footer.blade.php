<footer>
  <div class="footer-main">
    <div class="container">
      <div class="row">
        <div class="col-sm-6 col-md-4">
          <div class="footer-links">
            <h5 class="lead footer-hdr">For Job Seekers</h5>
            <div class="line-divider"></div>
            <div class="footer-link-list">
             <a href="{{route('register')}}" class="footer-links">Register <span class="badge badge-primary">Free</span></a>
             <a href="{{route('login')}}" class="footer-links">Login</a>
             <a href="" class="footer-links">Find jobs</a>
             <a href="#" class="footer-links">Faq</a>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-4">
          <div class="footer-links">
            <h5 class="lead footer-hdr">Links</h5>
            <div class="line-divider"></div>
            <div class="footer-link-list">
             <a href="#" class="footer-links">Home</a>
             <a href="#" class="footer-links">About Us</a>
             <a href="#" class="footer-links">Advertise</a>
             <a href="#" class="footer-links">Contact Us</a>
             <a href="#" class="footer-links">Faq</a>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-4">
          <div class="footer-links">
            <h3 class="footer-brand mb-2">{{config('app.name', 'QRecruit')}}</h3>
            <div class="footer-link-list">
             <a href="#" class="footer-links"><i class="fas fa-compass"></i> 29 Okeagbe St, Garki, Abuja</a>
             <a href="tel:2348090012511" class="footer-links"><i class="fas fa-phone"></i> +234-8092-0100</a>
             <a href="mailto:info@qrecruit.ng" class="footer-links"><i class="fas fa-envelope"></i> info@qrecruit.ng</a>
             <div class="social-links">
               <a href="https://www.facebook.com" target="_blank" class="social-link"><i class="fab fa-facebook"></i></a>
               <a href="https://www.twitter.com"  target="_blank" class="social-link"><i class="fab fa-twitter"></i></a>
               <a href="https://www.linkedin.com"   target="_blank" class="social-link"><i class="fab fa-linkedin" ></i></a>
             </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</footer>

@push('css')
<style>
  .footer-main{
    background-color:#272727;
    color:#ddd;
  }
  .footer-links{
    padding-top:2rem;
    padding-bottom: 2rem;
  }
  .footer-links .footer-hdr{
    color:#ddd;
  }
  .footer-links .footer-link-list .footer-links{
    display:block;
    color:#ccc;
    padding:3px 0; 
    margin:0;
    font-size:.9rem;
  }
  .footer-links .footer-link-list .footer-links:hover{
    color:white;
  }
  .footer-main .social-links {
    margin:20px 0;
  }
  .footer-main .social-links .social-link{
    background-color:white; 
    color:#333;
    padding:8px 10px;
    border-radius: 50%;
    transition:all .3s ease;
  }
  .footer-main .social-links .social-link:hover{
    color:white;
    background-color:#0261A6;
  }
</style>
@endpush