(() => {
    'use strict';

    const header = document.getElementById('siteHeader');
    const reduceMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
    const desktopQuery = window.matchMedia('(min-width: 1200px)');
    const mobileQuery = window.matchMedia('(max-width: 767px)');

    const onHeaderScroll = () => {
        if (!header) return;
        header.classList.toggle('is-scrolled', window.scrollY > 18);
    };

    onHeaderScroll();
    window.addEventListener('scroll', onHeaderScroll, { passive: true });

    const faqItems = Array.from(document.querySelectorAll('.faq-item'));
    faqItems.forEach((item) => {
        item.addEventListener('toggle', () => {
            if (!item.open) return;
            faqItems.forEach((other) => {
                if (other !== item) other.open = false;
            });
        });
    });

    const showEverything = () => {
        document.querySelectorAll('.reveal, .bento-card, .feature-panel, .rating-step, .step-item').forEach((el) => {
            el.style.opacity = '1';
            el.style.transform = 'none';
        });
    };

    if (reduceMotion || typeof window.gsap === 'undefined' || typeof window.ScrollTrigger === 'undefined') {
        showEverything();
        return;
    }

    gsap.registerPlugin(ScrollTrigger);

    // Hero
    const heroTl = gsap.timeline({ defaults: { ease: 'power3.out' } });
    heroTl
        .from('.hero-eyebrow', { y: 14, opacity: 0, duration: 0.45 })
        .from('.hero-title', { y: 24, opacity: 0, duration: 0.7 }, '-=0.15')
        .from('.hero-description', { y: 18, opacity: 0, duration: 0.5 }, '-=0.32')
        .from('.hero-actions', { y: 16, opacity: 0, duration: 0.48 }, '-=0.28')
        .from('.product-stage', { y: 28, opacity: 0, scale: 0.97, duration: 0.75 }, '-=0.62')
        .from('.floating-card', { y: 16, opacity: 0, scale: 0.9, duration: 0.42, stagger: 0.08 }, '-=0.38');

    // Decorative looping animations: desktop/tablet only, very light on mobile
    if (desktopQuery.matches) {
        gsap.to('.orbit-one', { rotation: 360, duration: 55, ease: 'none', repeat: -1 });
        gsap.to('.orbit-two', { rotation: -360, duration: 68, ease: 'none', repeat: -1 });
    }

    // Generic reveals
    document.querySelectorAll('.reveal').forEach((el) => {
        gsap.to(el, {
            opacity: 1,
            y: 0,
            duration: 0.65,
            ease: 'power3.out',
            scrollTrigger: {
                trigger: el,
                start: 'top 90%',
                once: true
            }
        });
    });

    // 80% counter
    const counterEl = document.querySelector('[data-counter="80"]');
    if (counterEl) {
        const counter = { value: 0 };
        gsap.to(counter, {
            value: 80,
            duration: 1.0,
            ease: 'power2.out',
            snap: { value: 1 },
            scrollTrigger: {
                trigger: counterEl,
                start: 'top 88%',
                once: true
            },
            onUpdate: () => {
                counterEl.textContent = `${Math.round(counter.value)}%`;
            }
        });
    }

    // Bento cards
    const bentoCards = gsap.utils.toArray('.bento-card');
    if (bentoCards.length) {
        gsap.fromTo(
            bentoCards,
            { y: 24, opacity: 0 },
            {
                y: 0,
                opacity: 1,
                duration: 0.58,
                stagger: 0.08,
                ease: 'power3.out',
                clearProps: 'opacity,transform',
                scrollTrigger: {
                    trigger: '.problem-grid',
                    start: 'top 88%',
                    once: true
                }
            }
        );
    }

    // Shared elements
    const featurePanels = Array.from(document.querySelectorAll('.feature-panel'));
    const statusTitle = document.getElementById('scrollyStatusTitle');
    const gaugeValue = document.getElementById('gaugeValue');
    const gaugeProgress = document.getElementById('gaugeProgress');
    const stage = document.querySelector('.scrolly-stage-inner');
    const shieldCore = document.querySelector('.shield-core');
    const stageBadges = document.querySelectorAll('.scrolly-badge');
    const accentMap = ['#4285F4', '#FBBC05', '#34A853', '#4285F4', '#EA4335', '#34A853'];

    const setActiveFeature = (index) => {
        featurePanels.forEach((panel, panelIndex) => {
            panel.classList.toggle('is-active', panelIndex === index);
        });

        const panel = featurePanels[index];
        if (!panel) return;

        if (statusTitle) statusTitle.textContent = panel.dataset.featureTitle || '';
        if (gaugeValue) gaugeValue.textContent = String(index + 1).padStart(2, '0');

        if (gaugeProgress) {
            gaugeProgress.style.width = `${((index + 1) / featurePanels.length) * 100}%`;
            gaugeProgress.style.backgroundColor = accentMap[index];
        }

        if (stage) {
            gsap.to(stage, {
                boxShadow: `0 26px 78px rgba(32,33,36,0.12), 0 25px 80px ${hexToRgba(accentMap[index], 0.10)}`,
                duration: 0.35,
                overwrite: true
            });
        }

        if (shieldCore) {
            gsap.fromTo(
                shieldCore,
                { y: 7, scale: 0.99 },
                { y: 0, scale: 1, duration: 0.4, ease: 'power3.out', overwrite: true }
            );
        }

        if (stageBadges.length) {
            gsap.fromTo(
                stageBadges,
                { scale: 0.94, opacity: 0.8 },
                { scale: 1, opacity: 1, duration: 0.28, stagger: 0.03, overwrite: true }
            );
        }
    };

    // Rating story
    const ratingSteps = Array.from(document.querySelectorAll('.rating-step'));
    const ratingValueEl = document.getElementById('ratingValue');
    const ratingReviewsEl = document.getElementById('ratingReviews');
    const ratingLabelEl = document.getElementById('ratingLabel');
    const ratingStarsFillEl = document.getElementById('ratingStarsFill');
    const ratingProgressFillEl = document.getElementById('ratingProgressFill');

    const updateRatingStage = (stepEl) => {
        if (!stepEl || !ratingValueEl || !ratingReviewsEl || !ratingLabelEl || !ratingStarsFillEl || !ratingProgressFillEl) return;

        ratingSteps.forEach((item) => item.classList.toggle('is-active', item === stepEl));

        const targetRating = parseFloat(stepEl.dataset.rating || '4.1');
        const targetReviews = parseInt((stepEl.dataset.reviews || '0').replace(/,/g, ''), 10);
        const targetLabel = stepEl.dataset.label || '';
        const targetProgress = parseFloat(stepEl.dataset.progress || '25');

        const ratingProxy = { value: parseFloat(ratingValueEl.textContent || '4.1') || 4.1 };
        gsap.to(ratingProxy, {
            value: targetRating,
            duration: 0.45,
            ease: 'power2.out',
            onUpdate: () => {
                const value = ratingProxy.value;
                ratingValueEl.textContent = value.toFixed(1);
                ratingStarsFillEl.style.width = `${Math.max(0, Math.min(100, (value / 5) * 100))}%`;
            }
        });

        const reviewsProxy = {
            value: parseInt((ratingReviewsEl.textContent || '0').replace(/[^0-9]/g, ''), 10) || 0
        };

        gsap.to(reviewsProxy, {
            value: targetReviews,
            duration: 0.55,
            ease: 'power2.out',
            snap: { value: 1 },
            onUpdate: () => {
                ratingReviewsEl.textContent = `(${Math.round(reviewsProxy.value).toLocaleString('en-US')} reseñas)`;
            }
        });

        gsap.to(ratingProgressFillEl, {
            width: `${targetProgress}%`,
            duration: 0.5,
            ease: 'power2.out'
        });

        if (ratingStarsFillEl) {
            gsap.fromTo(
                ratingStarsFillEl,
                { scale: 0.96 },
                { scale: 1, duration: 0.35, ease: 'back.out(1.7)' }
            );
        }

        ratingLabelEl.textContent = targetLabel;
    };

    // Scrollytelling adaptado por dispositivo.
    // Desktop usa el efecto completo. Móvil usa sticky nativo + actualización por scroll.
    if (desktopQuery.matches) {
        if (featurePanels.length) {
            setActiveFeature(0);
            featurePanels.forEach((panel, index) => {
                ScrollTrigger.create({
                    trigger: panel,
                    start: 'top center',
                    end: 'bottom center',
                    onEnter: () => setActiveFeature(index),
                    onEnterBack: () => setActiveFeature(index)
                });
            });
        }

        if (ratingSteps.length) {
            updateRatingStage(ratingSteps[0]);
            ratingSteps.forEach((stepEl) => {
                ScrollTrigger.create({
                    trigger: stepEl,
                    start: 'top center',
                    end: 'bottom center',
                    onEnter: () => updateRatingStage(stepEl),
                    onEnterBack: () => updateRatingStage(stepEl)
                });
            });
        }

        // Parallax solo escritorio.
        const parallaxMedia = document.querySelector('.parallax-media');
        if (parallaxMedia) {
            gsap.fromTo(
                parallaxMedia,
                { yPercent: -7, scale: 1.08 },
                {
                    yPercent: 7,
                    scale: 1,
                    ease: 'none',
                    scrollTrigger: {
                        trigger: '.shield-showcase',
                        start: 'top bottom',
                        end: 'bottom top',
                        scrub: 1
                    }
                }
            );
        }

        if (document.querySelector('.shield-core')) {
            gsap.to('.ring-a', { rotation: 360, duration: 28, ease: 'none', repeat: -1 });
            gsap.to('.ring-b', { rotation: -360, duration: 36, ease: 'none', repeat: -1 });
            gsap.to('.shield-main', { y: -8, duration: 2.8, ease: 'sine.inOut', repeat: -1, yoyo: true });
        }
    } else if (mobileQuery.matches) {
        // MÓVIL: mantenemos animación y significado sin GSAP pinning.
        if (featurePanels.length) {
            setActiveFeature(0);

            featurePanels.forEach((panel, index) => {
                ScrollTrigger.create({
                    trigger: panel,
                    start: 'top 70%',
                    end: 'bottom 35%',
                    onEnter: () => setActiveFeature(index),
                    onEnterBack: () => setActiveFeature(index)
                });
            });
        }

        if (ratingSteps.length) {
            updateRatingStage(ratingSteps[0]);

            ratingSteps.forEach((stepEl) => {
                ScrollTrigger.create({
                    trigger: stepEl,
                    start: 'top 70%',
                    end: 'bottom 35%',
                    onEnter: () => updateRatingStage(stepEl),
                    onEnterBack: () => updateRatingStage(stepEl)
                });
            });
        }

        // Visual del escudo sigue vivo en móvil, pero muy ligero.
        if (document.querySelector('.shield-core')) {
            gsap.to('.ring-a', { rotation: 360, duration: 34, ease: 'none', repeat: -1 });
            gsap.to('.ring-b', { rotation: -360, duration: 44, ease: 'none', repeat: -1 });
            gsap.to('.shield-main', {
                y: -4,
                duration: 2.7,
                ease: 'sine.inOut',
                repeat: -1,
                yoyo: true
            });
        }
    } else {
        // TABLET: contenido siempre visible; sin sticky pesado.
        featurePanels.forEach((panel) => {
            panel.classList.add('is-active');
            panel.style.opacity = '1';
            panel.style.transform = 'none';
        });

        ratingSteps.forEach((stepEl) => {
            stepEl.classList.add('is-active');
            stepEl.style.opacity = '1';
            stepEl.style.transform = 'none';
        });

        if (ratingSteps[0]) updateRatingStage(ratingSteps[0]);
        if (featurePanels[0]) setActiveFeature(0);
    }

    // Showcase text reveal, safe everywhere
    const showcaseCopy = document.querySelector('.showcase-copy');
    if (showcaseCopy) {
        gsap.from('.showcase-copy > *', {
            y: 24,
            opacity: 0,
            duration: 0.55,
            stagger: 0.08,
            ease: 'power3.out',
            scrollTrigger: {
                trigger: showcaseCopy,
                start: 'top 88%',
                once: true
            }
        });
    }

    // Paso a Paso — iluminación progresiva por scroll
    const stepsSection = document.querySelector('.steps-section');
    const stepItems = Array.from(document.querySelectorAll('.step-item'));
    const stepsFill = document.querySelector('.steps-progress-fill');
    const stepsMobileQuery = window.matchMedia('(max-width: 767px)');

    const paintStepState = (activeIndex, lineProgress = 0) => {
        stepItems.forEach((item, index) => {
            item.classList.toggle('is-complete', index < activeIndex);
            item.classList.toggle('is-active', index === activeIndex);
        });

        if (stepsFill) {
            const progress = Math.max(0, Math.min(1, lineProgress));

            if (stepsMobileQuery.matches) {
                stepsFill.style.transform = `scaleY(${progress})`;
            } else {
                stepsFill.style.transform = `scaleX(${progress})`;
            }
        }
    };

    if (stepsSection && stepItems.length) {
        // Primer estado antes de entrar a la sección.
        paintStepState(0, 0);

        if (stepsMobileQuery.matches) {
            // Móvil: cada tarjeta activa el siguiente tramo de la línea al entrar.
            stepItems.forEach((item, index) => {
                ScrollTrigger.create({
                    trigger: item,
                    start: 'top 72%',
                    end: 'bottom 38%',
                    onEnter: () => {
                        const progress = stepItems.length > 1
                            ? index / (stepItems.length - 1)
                            : 1;
                        paintStepState(index, progress);
                    },
                    onEnterBack: () => {
                        const progress = stepItems.length > 1
                            ? index / (stepItems.length - 1)
                            : 1;
                        paintStepState(index, progress);
                    }
                });
            });

            // Al terminar el último paso, completar toda la línea.
            ScrollTrigger.create({
                trigger: stepItems[stepItems.length - 1],
                start: 'bottom 70%',
                onEnter: () => {
                    paintStepState(stepItems.length - 1, 1);
                }
            });
        } else {
            // Escritorio/tablet: una sola progresión continua mientras baja la sección.
            ScrollTrigger.create({
                trigger: stepsSection,
                start: 'top 78%',
                end: 'bottom 38%',
                scrub: true,
                onUpdate: (self) => {
                    const p = self.progress;
                    const activeIndex = Math.min(
                        stepItems.length - 1,
                        Math.floor(p * stepItems.length)
                    );

                    paintStepState(activeIndex, p);
                },
                onLeaveBack: () => paintStepState(0, 0)
            });
        }
    }

    // FAQ visual floats only desktop
    if (desktopQuery.matches) {
        gsap.to('.faq-shield', {
            y: -8,
            rotate: -3,
            duration: 2.8,
            ease: 'sine.inOut',
            repeat: -1,
            yoyo: true
        });

        gsap.to('.faq-bubble', {
            y: -7,
            duration: 2.4,
            ease: 'sine.inOut',
            repeat: -1,
            yoyo: true,
            stagger: 0.2
        });
    }


    // FAQ — entrada animada por scroll
    const faqAnimatedHeader = document.querySelector('.faq-animate-header');
    const faqAnimatedItems = Array.from(document.querySelectorAll('.faq-animate-item'));

    if (faqAnimatedHeader) {
        const faqTl = gsap.timeline({
            scrollTrigger: {
                trigger: faqAnimatedHeader,
                start: 'top 84%',
                once: true
            }
        });

        faqTl
            .to('.faq-animate-header .section-kicker', {
                opacity: 1,
                y: 0,
                duration: .5,
                ease: 'power3.out'
            })
            .to('.faq-animate-header h2', {
                opacity: 1,
                y: 0,
                scale: 1,
                duration: .7,
                ease: 'power3.out'
            }, '-=.25')
            .to('.faq-animate-header p', {
                opacity: 1,
                y: 0,
                duration: .5,
                ease: 'power3.out'
            }, '-=.35');
    }

    if (faqAnimatedItems.length) {
        gsap.to(faqAnimatedItems, {
            opacity: 1,
            y: 0,
            scale: 1,
            duration: .5,
            stagger: .07,
            ease: 'power3.out',
            clearProps: 'transform',
            scrollTrigger: {
                trigger: '.faq-clean-list',
                start: 'top 88%',
                once: true
            },
            onComplete: () => {
                faqAnimatedItems.forEach((item) => item.classList.add('is-visible'));
            }
        });
    }

    const refresh = () => requestAnimationFrame(() => ScrollTrigger.refresh());
    window.addEventListener('load', refresh);

    document.addEventListener('visibilitychange', () => {
        if (!document.hidden) refresh();
    });

    window.addEventListener('orientationchange', () => {
        setTimeout(refresh, 250);
    });

    window.addEventListener('resize', () => {
        clearTimeout(window.__dilohoyResizeTimer);
        window.__dilohoyResizeTimer = setTimeout(() => {
            refresh();

            if (stepsFill) {
                const transform = stepsFill.style.transform || '';
                const match = transform.match(/scale[XY]\(([^)]+)\)/);
                const progress = match ? parseFloat(match[1]) : 0;

                stepsFill.style.transform = stepsMobileQuery.matches
                    ? `scaleY(${progress})`
                    : `scaleX(${progress})`;
            }
        }, 180);
    });

    function hexToRgba(hex, alpha) {
        const clean = hex.replace('#', '');
        const bigint = parseInt(clean, 16);
        const r = (bigint >> 16) & 255;
        const g = (bigint >> 8) & 255;
        const b = bigint & 255;
        return `rgba(${r}, ${g}, ${b}, ${alpha})`;
    }
})();
