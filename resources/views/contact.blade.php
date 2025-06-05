@extends('layouts.app')

@section('content')
<main class="contact-page">
    <section class="contact-info-strip">
      <div class="site-container contact-info-strip__inner">
        <div class="contact-card">
          <h3 class="contact-card__title">Загальні питання</h3>
          <p><a href="mailto:contact@ai-podcasts.com" class="contact-card__link">contact@ai-podcasts.com <svg class="icon-external" width="12" height="12" fill="var(--color-accent)" xmlns="http://www.w3.org/2000/svg"><path d="M3 9h6M9 3l-6 6" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round"/></svg></a></p>
          <p><a href="tel:+11234567890" class="contact-card__link">+1 (123) 456-7890 <svg class="icon-external" width="12" height="12" fill="var(--color-accent)" xmlns="http://www.w3.org/2000/svg"><path d="M3 9h6M9 3l-6 6" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round"/></svg></a></p>
        </div>
        <div class="contact-card">
          <h3 class="contact-card__title">Технічна підтримка</h3>
          <p><a href="mailto:support@ai-podcasts.com" class="contact-card__link">support@ai-podcasts.com <svg class="icon-external" width="12" height="12" fill="var(--color-accent)" xmlns="http://www.w3.org/2000/svg"><path d="M3 9h6M9 3l-6 6" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round"/></svg></a></p>
          <p><a href="tel:+11234567890" class="contact-card__link">+1 (123) 456-7890 <svg class="icon-external" width="12" height="12" fill="var(--color-accent)" xmlns="http://www.w3.org/2000/svg"><path d="M3 9h6M9 3l-6 6" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round"/></svg></a></p>
        </div>
        <div class="contact-card">
          <h3 class="contact-card__title">Наш офіс</h3>
          <p>Address: 123 AI Tech Avenue, TechVille, 54321</p>
          <p><a href="https://maps.google.com?q=123+AI+Tech+Avenue,+TechVille,+54321" class="contact-card__link">Прокласти маршрут <svg class="icon-external" width="12" height="12" fill="var(--color-accent)" xmlns="http://www.w3.org/2000/svg"><path d="M3 9h6M9 3l-6 6" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round"/></svg></a></p>
        </div>
        <div class="contact-card contact-card--social">
          <h3 class="contact-card__title">Приєднуйтесь до нас</h3>
          <div class="social-icons">
            <a href="https://twitter.com" class="social-icon" aria-label="Twitter">
              <svg width="20" height="20" fill="var(--color-text)" xmlns="http://www.w3.org/2000/svg"><path d="M20 4.5a8.2 8.2 0 01-2.3.6 4 4 0 001.8-2.3 8.2 8.2 0 01-2.6 1 4.1 4.1 0 00-7 3.7A11.5 11.5 0 011.4 3.2 4.1 4.1 0 002.8 9.7 4 4 0 01.8 9v.1a4.1 4.1 0 003.3 4 4 4 0 01-1.8.1 4.1 4.1 0 003.8 2.8A8.3 8.3 0 010 18.6a11.6 11.6 0 006.3 1.8c7.5 0 11.6-6.2 11.6-11.6l-.01-.53A8.3 8.3 0 0020 4.5z"/></svg>
            </a>
            <a href="https://facebook.com" class="social-icon" aria-label="Facebook">
              <svg width="20" height="20" fill="var(--color-text)" xmlns="http://www.w3.org/2000/svg"><path d="M18 0h-4a6 6 0 00-6 6v4H4v4h4v8h4v-8h4l1-4h-5V6a2 2 0 012-2h3V0z"/></svg>
            </a>
            <a href="https://linkedin.com" class="social-icon" aria-label="LinkedIn">
              <svg width="20" height="20" fill="var(--color-text)" xmlns="http://www.w3.org/2000/svg"><path d="M4 3a2 2 0 110 4 2 2 0 010-4zm1 5H3v12h4V8H5zm5 0h-2v12h4v-6c0-4 5-4.3 5 0v6h4v-7c0-8-9-7.7-11-3V8z"/></svg>
            </a>
          </div>
        </div>
      </div>
    </section>

    <section class="contact-main">
      <div class="site-container contact-main__inner">
        <div class="contact-main__left">
          <div class="contact-main__icon">
            <svg width="32" height="32" fill="var(--color-accent)" xmlns="http://www.w3.org/2000/svg"><circle cx="16" cy="16" r="16"/><path d="M16 8v8l4 4" stroke="#0D0D0D" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round"/></svg>
          </div>
          <h2 class="contact-main__title">Звʼяжіться з AI Podcasts</h2>
        </div>
        <div class="contact-main__right">
          <form action="/submit-contact" method="POST" class="contact-form" id="contact-form">
            <div class="form-row">
              <div class="form-field">
                <label for="firstName" class="form-label">Ім'я</label>
                <input type="text" id="firstName" name="firstName" class="form-input" placeholder="Введіть ім'я">
              </div>
              <div class="form-field">
                <label for="lastName" class="form-label">Прізвище</label>
                <input type="text" id="lastName" name="lastName" class="form-input" placeholder="Введіть прізвище">
              </div>
            </div>
            <div class="form-row">
              <div class="form-field">
                <label for="email" class="form-label">Ел. пошта</label>
                <input type="email" id="email" name="email" class="form-input" placeholder="Введіть ел. пошту">
              </div>
              <div class="form-field">
                <label for="phone" class="form-label">Номер телефону</label>
                <div class="phone-input-wrapper">
                  <span class="phone-flag">🇺🇸</span>
                  <input type="tel" id="phone" name="phone" class="form-input form-input--phone" placeholder="Введіть номер телефону">
                </div>
              </div>
            </div>
            <div class="form-row">
              <div class="form-field form-field--full">
                <label for="message" class="form-label">Повідомлення</label>
                <textarea id="message" name="message" class="form-textarea" placeholder="Введіть повідомлення"></textarea>
              </div>
            </div>
            <div class="form-row form-row--footer">
              <div class="form-field form-field--checkbox">
                <input type="checkbox" id="agree" name="agree" class="form-checkbox">
                <label for="agree" class="form-checkbox-label">Я погоджуюсь з Умовами використання та Політикою приватності</label>
              </div>
              <button type="submit" class="btn btn--accent btn--send">Надіслати</button>
            </div>
          </form>
        </div>
      </div>
    </section>

    <section class="faq-section">
      <div class="site-container faq-section__inner">
        <div class="faq-intro">
          <div class="faq-intro__icon">
            <svg width="32" height="32" fill="var(--color-accent)" xmlns="http://www.w3.org/2000/svg"><circle cx="16" cy="16" r="16"/><path d="M12 12h8v8H12z" stroke="#0D0D0D" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round"/></svg>
          </div>
          <h2 class="faq-intro__title">Поширені запитання</h2>
          <p class="faq-intro__subtitle">Якщо тут немає відповіді на ваше запитання, зв'яжіться з нами, і ми допоможемо.</p>
          <a href="/contact#contact-form" class="btn btn--outlined">Поставити запитання</a>
        </div>
        <div class="faq-accordion">
          <div class="accordion-item">
            <button class="accordion-header" aria-expanded="true"><span>Що таке AI?</span><svg class="accordion-icon" width="16" height="16" fill="var(--color-accent)" xmlns="http://www.w3.org/2000/svg"><path d="M4 8h8M8 4l4 4-4 4" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round"/></svg></button>
            <div class="accordion-body"><p>AI (штучний інтелект) — це імітація людського інтелекту в машинах, що дозволяє вирішувати завдання, навчатися й приймати рішення.</p></div>
          </div>
          <div class="accordion-item">
            <button class="accordion-header" aria-expanded="false"><span>Як слухати ваші подкасти?</span><svg class="accordion-icon" width="16" height="16" fill="var(--color-accent)" xmlns="http://www.w3.org/2000/svg"><path d="M4 8h8M8 4l4 4-4 4" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round"/></svg></button>
            <div class="accordion-body"><p>Ви можете підписатися на основних платформах, таких як Apple Podcasts, Spotify, або скористатися нашим вбудованим плеєром на сторінці епізоду.</p></div>
          </div>
          <div class="accordion-item">
            <button class="accordion-header" aria-expanded="false"><span>Чи безкоштовні ваші подкасти?</span><svg class="accordion-icon" width="16" height="16" fill="var(--color-accent)" xmlns="http://www.w3.org/2000/svg"><path d="M4 8h8M8 4l4 4-4 4" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round"/></svg></button>
            <div class="accordion-body"><p>Так. Усі наші подкасти можна слухати та завантажувати безкоштовно.</p></div>
          </div>
          <div class="accordion-item">
            <button class="accordion-header" aria-expanded="false"><span>Як часто ви випускаєте нові епізоди?</span><svg class="accordion-icon" width="16" height="16" fill="var(--color-accent)" xmlns="http://www.w3.org/2000/svg"><path d="M4 8h8M8 4l4 4-4 4" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round"/></svg></button>
            <div class="accordion-body"><p>Нові епізоди виходять щопʼятниці о 10:00 EST.</p></div>
          </div>
        </div>
      </div>
    </section>
</main>
@endsection
