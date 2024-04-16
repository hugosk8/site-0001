<!-- Start Form -->
<div class="titlebar-inner">
    <div class="container titlebar-container">
        <div class="row titlebar-container justify-center">
            <div class="col titlebar-col col-xl-6 col-lg-8 col-12 text-center text-gray-400">
                <h1>Contact</h1>
                <p class="leading-20">Nous sommes la pour repondre à toute vos questions.​</p>
            </div>
        </div>
    </div>
</div>

<section class="lqd-section form pt-40 pb-100 bg-white" id="form">
    <div class="container module-container">
        <div class="row">
            <div class="col col-12 p-0 module-col">
                <div class="w-full relative bg-white rounded-10 transition-all shadow-md pt-60 px-70 pb-80 module-form">
                    <div class="w-full relative flex flex-wrap items-center justify-between">
                        <div class="w-50percent relative pt-5 px-10 pb-10 sm:w-full">
                            <h2 class="ld-fh-element relative text-28 font-bold"> Envoyer un message</h2>
                        </div>
                        <div class="w-50percent relative text-end pr-40 sm:w-full sm:text-start">
                            <img class="w-60" width="100" height="100" src="<?= URL ?>/public/assets/images/0001/contact/shape-plane.svg" alt="plane">
                        </div>
                    </div>
                    <div class="lqd-contact-form lqd-contact-form-inputs-round lqd-contact-form-button-block lqd-contact-form-button-lg lqd-contact-form-button-round lqd-contact-form-button-border-none lqd-contact-form-inputs-lg p-10">
                        <div role="form" class="lqd-cf mt-25" id="lqd-cf-form-contact" lang="en-US" dir="ltr">
                            <div class="screen-reader-response">
                                <p role="status" aria-live="polite" aria-atomic="true"></p>
                            </div>
                            <form method="POST" id="contact-form" class="lqd-cf-form init contact-form-page" novalidate="novalidate" data-status="init">
                                <div class="row -mx-15">
                                    <div class="col col-md-6 col-12 py-0 px-15">
                                        <span class="lqd-form-control-wrap text">
                                            <input 
                                                type="text" 
                                                name="name" 
                                                value="" 
                                                size="40" 
                                                class="lqd-cf-form-control border-1 border-black-10 rounded-4 px-2em text-16 text-slate-700" 
                                                aria-required="true" 
                                                aria-invalid="false" 
                                                placeholder="Nom">
                                        </span>
                                    </div>
                                    <div class="col col-md-6 col-12 py-0 px-15">
                                        <span class="lqd-form-control-wrap email">
                                            <input 
                                                type="email" 
                                                name="email" 
                                                value="" 
                                                size="40" 
                                                class="lqd-cf-form-control border-1 border-black-10 rounded-4 px-2em text-16 text-slate-700" 
                                                aria-required="true" 
                                                aria-invalid="false" 
                                                placeholder="E-mail">
                                        </span>
                                    </div>
                                    <div class="col col-md-12 col-12 py-0 px-15">
                                        <span class="lqd-form-control-wrap text">
                                            <input 
                                                type="text" 
                                                name="subject" 
                                                value="" 
                                                size="40" 
                                                class="lqd-cf-form-control border-1 border-black-10 rounded-4 px-2em text-16 text-slate-700" 
                                                aria-required="true" 
                                                aria-invalid="false" 
                                                placeholder="Sujet">
                                        </span>
                                    </div>
                                    <div class="col col-12 py-0 px-15">
                                        <span class="lqd-form-control-wrap">
                                            <textarea 
                                                name="message" 
                                                cols="10" 
                                                rows="4" 
                                                class="lqd-cf-form-control border-1 border-black-10 rounded-4 px-2em text-16 text-slate-700" 
                                                aria-required="true" 
                                                aria-invalid="false" 
                                                placeholder="Message"></textarea>
                                        </span>
                                    </div>
                                    <div class="col col-12 py-0 px-15">
                                        <span class="lqd-form-control-wrap acceptance-120">
                                            <span class="lqd-cf-form-control lqd-cf-acceptance">
                                                <span class="lqd-cf-list-item">
                                                    <label>
                                                        <input 
                                                            type="checkbox" 
                                                            name="acceptance-120" 
                                                            value="1" 
                                                            aria-invalid="false">
                                                        <span class="lqd-cf-list-item-label">
                                                            J'ai lu et accepté la politique de confidentialité.
                                                        </span>
                                                    </label>
                                                </span>
                                            </span>
                                        </span>
                                    </div>
                                    <div class="col col-12 py-0 px-15">
                                        <input 
                                            type="submit" 
                                            value="Envoyer le message" 
                                            class="lqd-cf-form-control has-spinner lqd-cf-submit bg-blue text-white submit-button">
                                    </div>
                                </div>
                                <div id="form-success" class="alert-success d-none"></div>
                                <div id="form-error" class="alert-danger d-none"></div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Form -->