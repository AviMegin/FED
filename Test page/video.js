console.clear();

gsap.registerPlugin(SplitText);
gsap.registerPlugin(DrawSVGPlugin);

select = e => document.querySelector(e);
selectAll = e => document.querySelectorAll(e);

const container = select('.container');
let gltl = gsap.timeline({ repeat: -1, repeatDelay: 1 });
let split = new SplitText(".loader-text", {type:"chars", charsClass:"char"});

function animIn() {
    tl = gsap.timeline();
    tl.to('.container', {
        autoAlpha: 1,
        duration: 2
    })
    .from('.base', {
        drawSVG: 0,
        duration: 1,
        transformOrigin: "center center",
        ease: 'power2.inOut'
    }, 0)
    .from('.char', {
        y: 20,
        opacity: 0,
        duration: 1,
        stagger: 0.05,
        ease: 'power2'
    }, 0)
    .from('.full-outer', {
        rotate: 360,
        ease: 'none',
        repeat: 3,
        transformOrigin: "center center",
        duration: 0.5
    }, 0)
    .from('.full', {
        drawSVG: 0,
        transformOrigin: "center center",
        ease: "power2.inOut",
        duration: 1
    }, 0.5)
    .set('.full', { autoAlpha: 0 });

    return tl;
}

function animFracture() {
    tl = gsap.timeline({id: "fracture"});
    tl.set('.fractured', { autoAlpha: 1 })
    .to('.fractured', {
        rotate: -360,
        ease: 'none',
        repeat: 20,
        transformOrigin: "center center",
        duration: 0.5
    })
    .to('.end', {
        rotate: -60,
        ease: 'none',
        transformOrigin: "left 40px",
        duration: 2
    }, 0)
    .set('.end', { autoAlpha: 0, immediateRender: false }, 3)
    .set('.end-dup', { autoAlpha: 1, immediateRender: false, rotation: -60,transformOrigin: "left 40px" }, 3)
    .to('.end-dup', {
        x: -800,
        y: 800,
        rotation: -1080,
        ease: 'none',
        transformOrigin: "20px 15px",
        duration: 1.2
    }, 3)
    .to('.char', {
        x: "random(200, 600, 30)",
        y: 400,
        rotation: "random(90, 270)",
        duration: 0.8,
        stagger: 0.01,
        ease: 'none'
    }, 2.2)
    .to('.middle', {
        rotate: -60,
        ease: 'none',
        transformOrigin: "92px 45px",
        duration: 2
    }, 3)
    .set('.middle', { autoAlpha: 0, immediateRender: false }, 5)
    .set('.middle-dup', { autoAlpha: 1, immediateRender: false, rotation: -60,transformOrigin: "92px 45px" }, 5)
    .to('.middle-dup', {
        x: 800,
        y: 200,
        rotation: -1080,
        ease: 'none',
        transformOrigin: "center center",
        duration: 1.2
    }, 5)
    .set('.lead', { autoAlpha: 0, immediateRender: false }, 8)
    .set('.lead-dup', { autoAlpha: 1, immediateRender: false }, 8)
    .to('.lead-dup', {
        x: 50,
        y: -400,
        rotation: -1080,
        ease: 'sine',
        transformOrigin: "center center",
        duration: 1.2
    }, 8)
    .to('.lead-dup', {
        x: 300,
        y: 800,
        rotation: -3000,
        ease: 'power0.in',
        transformOrigin: "center center",
        duration: 1.4
    })
    .to('.base', {
        drawSVG: "100% 100%",
        duration: 0.6,
        transformOrigin: "center center",
        ease: 'power2.inOut'
    }, "-=4.3")
    .to('.shite', {
        autoAlpha: 1,
        duration: 4
    })
    .to('.shite', {
        autoAlpha: 0,
        duration: 2
    })
    .to('.container', {
        autoAlpha: 0,
        duration: 1
    }, "-=2")

    return tl;
}

function init() {
    gsap.set(['.end-dup', '.middle-dup', '.lead-dup'], { autoAlpha: 0 });

    gltl.add(animIn())
        .add(animFracture())
        .timeScale(1);
}

window.onload = () => {
	init();
    // GSDevTools.create();
};
