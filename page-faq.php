<?php
/* Template Name:Faq Page */
get_header();
?>

<section class="py-5 bg-light">
<div class="container">

    <h1 class="text-center mb-5">Frequently Asked Questions</h1>

    <div class="accordion" id="faqAccordion">

        <!-- PRICING -->
        <div class="accordion-item">
            <h2 class="accordion-header">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faq1">
                    💰 Pricing
                </button>
            </h2>
            <div id="faq1" class="accordion-collapse collapse show" data-bs-parent="#faqAccordion">
                <div class="accordion-body">
                    Our pricing starts from $99 depending on project requirements. We offer custom packages for businesses.
                </div>
            </div>
        </div>

        <!-- PROCESS -->
        <div class="accordion-item">
            <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2">
                    ⚙️ Process
                </button>
            </h2>
            <div id="faq2" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                <div class="accordion-body">
                    We follow a simple process: Requirement → Design → Development → Testing → Delivery.
                </div>
            </div>
        </div>

        <!-- SUPPORT -->
        <div class="accordion-item">
            <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq3">
                    🛠️ Support
                </button>
            </h2>
            <div id="faq3" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                <div class="accordion-body">
                    We provide 24/7 support via email and chat for all premium clients.
                </div>
            </div>
        </div>

        <!-- EXTRA -->
        <div class="accordion-item">
            <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq4">
                    🚀 Delivery Time
                </button>
            </h2>
            <div id="faq4" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                <div class="accordion-body">
                    Most projects are delivered within 3–7 days depending on complexity.
                </div>
            </div>
        </div>

    </div>

</div>
</section>

<?php get_footer(); ?>