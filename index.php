<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CrispX Hub - Modern Men's Fashion & Style Collection</title>
    <meta name="description" content="Discover contemporary men's clothing at CrispX Hub. From casual wear to formal attire, explore our curated collection of shirts, pants, jackets, and accessories. Quality fashion for the modern gentleman. Click here to continue exploring our latest arrivals and timeless pieces.">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        .main-wrapper-cx847 {
            font-family: 'Arial', sans-serif;
            line-height: 1.6;
            color: #333;
        }

        .header-section-mx92k {
            background: linear-gradient(135deg, #2c3e50, #34495e);
            color: white;
            padding: 1rem 0;
            position: fixed;
            width: 100%;
            top: 0;
            z-index: 1000;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }

        .nav-container-qx74p {
            max-width: 1200px;
            margin: 0 auto;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 0 2rem;
        }

        .logo-brand-zx91m {
            font-size: 2rem;
            font-weight: bold;
            color: #ecf0f1;
        }

        .navigation-menu-bx83n {
            display: flex;
            list-style: none;
            gap: 2rem;
        }

        .nav-link-dx55q {
            color: #ecf0f1;
            text-decoration: none;
            transition: color 0.3s;
            cursor: pointer;
        }

        .nav-link-dx55q:hover {
            color: #3498db;
        }

        .hero-banner-fx29w {
            background: linear-gradient(rgba(0,0,0,0.4), rgba(0,0,0,0.4)), url('https://images.pexels.com/photos/1040945/pexels-photo-1040945.jpeg') center/cover;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            color: white;
            margin-top: 80px;
        }

        .hero-content-gx67r {
            max-width: 800px;
            padding: 2rem;
        }

        .hero-title-hx44t {
            font-size: 3.5rem;
            margin-bottom: 1rem;
            text-shadow: 2px 2px 4px rgba(0,0,0,0.5);
        }

        .hero-subtitle-jx88u {
            font-size: 1.3rem;
            margin-bottom: 2rem;
            opacity: 0.9;
        }

        .cta-button-kx33v {
            background: #e74c3c;
            color: white;
            padding: 15px 30px;
            border: none;
            border-radius: 5px;
            font-size: 1.1rem;
            cursor: pointer;
            transition: background 0.3s;
            text-decoration: none;
            display: inline-block;
        }

        .cta-button-kx33v:hover {
            background: #c0392b;
        }

        .about-section-lx76y {
            padding: 80px 0;
            background: #f8f9fa;
        }

        .container-mx45z {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 2rem;
        }

        .section-title-nx88a {
            text-align: center;
            font-size: 2.5rem;
            margin-bottom: 3rem;
            color: #2c3e50;
        }

        .about-grid-ox12b {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 3rem;
            margin-bottom: 3rem;
        }

        .about-card-px99c {
            background: white;
            padding: 2rem;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
            text-align: center;
        }

        .card-icon-qx77d {
            font-size: 3rem;
            margin-bottom: 1rem;
            color: #3498db;
        }

        .collections-section-rx55e {
            padding: 80px 0;
            background: white;
        }

        .collections-grid-sx22f {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 2rem;
            margin-top: 3rem;
        }

        .collection-item-tx44g {
            position: relative;
            height: 300px;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
            transition: transform 0.3s;
        }

        .collection-item-tx44g:hover {
            transform: translateY(-5px);
        }

        .collection-bg-ux66h {
            width: 100%;
            height: 100%;
            background-size: cover;
            background-position: center;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .collection-overlay-vx88i {
            background: rgba(0,0,0,0.6);
            color: white;
            padding: 2rem;
            text-align: center;
            border-radius: 5px;
        }

        .history-section-wx33j {
            padding: 80px 0;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
        }

        .timeline-container-xx77k {
            max-width: 800px;
            margin: 0 auto;
            position: relative;
        }

        .timeline-item-yx99l {
            background: rgba(255,255,255,0.1);
            padding: 2rem;
            margin: 2rem 0;
            border-radius: 10px;
            backdrop-filter: blur(10px);
        }

        .timeline-year-zx44m {
            font-size: 1.5rem;
            font-weight: bold;
            color: #f1c40f;
            margin-bottom: 1rem;
        }

        .features-section-ay55n {
            padding: 80px 0;
            background: #ecf0f1;
        }

        .features-grid-by77o {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 2rem;
            margin-top: 3rem;
        }

        .feature-box-cy99p {
            background: white;
            padding: 2rem;
            text-align: center;
            border-radius: 10px;
            box-shadow: 0 3px 10px rgba(0,0,0,0.1);
            transition: transform 0.3s;
        }

        .feature-box-cy99p:hover {
            transform: translateY(-3px);
        }

        .reviews-section-dy22q {
            padding: 80px 0;
            background: #2c3e50;
            color: white;
        }

        .reviews-grid-ey44r {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
            margin-top: 3rem;
        }

        .review-card-fy66s {
            background: rgba(255,255,255,0.1);
            padding: 2rem;
            border-radius: 10px;
            backdrop-filter: blur(5px);
        }

        .reviewer-name-gy88t {
            font-weight: bold;
            color: #f1c40f;
            margin-top: 1rem;
        }

        .stars-rating-hy33u {
            color: #f1c40f;
            margin-bottom: 1rem;
        }

        .footer-section-iy55v {
            background: #1a1a1a;
            color: white;
            padding: 60px 0 20px;
        }

        .footer-grid-jy77w {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 3rem;
            margin-bottom: 2rem;
        }

        .footer-column-ky99x {
            padding: 1rem;
        }

        .footer-title-ly22y {
            font-size: 1.3rem;
            margin-bottom: 1rem;
            color: #3498db;
        }

        .contact-link-my44z {
            color: #ecf0f1;
            text-decoration: none;
            transition: color 0.3s;
        }

        .contact-link-my44z:hover {
            color: #3498db;
        }

        .modal-overlay-ny66a {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0,0,0,0.8);
            z-index: 2000;
        }

        .modal-content-oy88b {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background: white;
            padding: 2rem;
            border-radius: 10px;
            max-width: 600px;
            max-height: 80vh;
            overflow-y: auto;
            width: 90%;
        }

        .modal-close-py33c {
            position: absolute;
            top: 10px;
            right: 15px;
            font-size: 2rem;
            cursor: pointer;
            color: #999;
        }

        .continue-btn-qy55d {
            background: #27ae60;
            color: white;
            padding: 12px 25px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 1rem;
            margin: 10px;
            transition: background 0.3s;
        }

        .continue-btn-qy55d:hover {
            background: #219a52;
        }

        @media (max-width: 768px) {
            .navigation-menu-bx83n {
                display: none;
            }
            
            .hero-title-hx44t {
                font-size: 2.5rem;
            }
            
            .nav-container-qx74p {
                padding: 0 1rem;
            }
        }
    </style>

<style>       
        .cookie-consent-overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.8);
            backdrop-filter: blur(8px);
            -webkit-backdrop-filter: blur(8px);
            z-index: 9999;
            display: flex;
            align-items: center;
            justify-content: center;
            animation: fadeIn 0.3s ease-out;
        }

        .cookie-consent-modal {
            background: white;
            border-radius: 12px;
            padding: 30px;
            max-width: 500px;
            width: 90%;
            max-height: 80vh;
            overflow-y: auto;
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.3);
            transform: scale(0.9);
            animation: slideIn 0.3s ease-out forwards;
        }

        .cookie-consent-title {
            font-size: 24px;
            font-weight: 600;
            color: #2c3e50;
            margin-bottom: 15px;
            text-align: center;
        }

        .cookie-consent-text {
            color: #555;
            line-height: 1.6;
            margin-bottom: 25px;
            text-align: center;
        }

        .cookie-consent-buttons {
            display: flex;
            gap: 15px;
            justify-content: center;
            flex-wrap: wrap;
        }

        .cookie-btn {
            padding: 12px 24px;
            border: none;
            border-radius: 6px;
            font-size: 16px;
            font-weight: 500;
            cursor: pointer;
            transition: all 0.3s ease;
            min-width: 120px;
        }

        .cookie-btn-accept {
            background: #27ae60;
            color: white;
        }

        .cookie-btn-accept:hover {
            background: #219a52;
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(39, 174, 96, 0.3);
        }

        .cookie-btn-deny {
            background: #e74c3c;
            color: white;
        }

        .cookie-btn-deny:hover {
            background: #c0392b;
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(231, 76, 60, 0.3);
        }

        .cookie-status {
            position: fixed;
            top: 20px;
            right: 20px;
            padding: 10px 15px;
            border-radius: 6px;
            color: white;
            font-weight: 500;
            z-index: 10000;
            animation: slideInRight 0.3s ease-out;
        }

        .status-accepted {
            background: #27ae60;
        }

        .status-denied {
            background: #e74c3c;
        }

        .hidden {
            display: none !important;
        }

        .consent-active {
            overflow: hidden;
        }

        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }

        @keyframes slideIn {
            from { 
                transform: scale(0.9) translateY(-20px);
                opacity: 0;
            }
            to { 
                transform: scale(1) translateY(0);
                opacity: 1;
            }
        }

        @keyframes slideInRight {
            from { 
                transform: translateX(100%);
                opacity: 0;
            }
            to { 
                transform: translateX(0);
                opacity: 1;
            }
        }

        @media (max-width: 600px) {
            .cookie-consent-buttons {
                flex-direction: column;
            }
            
            .cookie-btn {
                width: 100%;
            }
        }
    </style>
    
</head>
    <script>
document.write(unescape('%3C%21%2D%2D%20%43%6F%6F%6B%69%65%20%43%6F%6E%73%65%6E%74%20%4D%6F%64%61%6C%20%2D%2D%3E%0A%20%20%20%20%3C%64%69%76%20%69%64%3D%22%63%6F%6F%6B%69%65%43%6F%6E%73%65%6E%74%4F%76%65%72%6C%61%79%22%20%63%6C%61%73%73%3D%22%63%6F%6F%6B%69%65%2D%63%6F%6E%73%65%6E%74%2D%6F%76%65%72%6C%61%79%22%3E%0A%20%20%20%20%20%20%20%20%3C%64%69%76%20%63%6C%61%73%73%3D%22%63%6F%6F%6B%69%65%2D%63%6F%6E%73%65%6E%74%2D%6D%6F%64%61%6C%22%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%3C%68%32%20%63%6C%61%73%73%3D%22%63%6F%6F%6B%69%65%2D%63%6F%6E%73%65%6E%74%2D%74%69%74%6C%65%22%3E%57%65%20%55%73%65%20%43%6F%6F%6B%69%65%73%3C%2F%68%32%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%3C%70%20%63%6C%61%73%73%3D%22%63%6F%6F%6B%69%65%2D%63%6F%6E%73%65%6E%74%2D%74%65%78%74%22%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%57%65%20%75%73%65%20%63%6F%6F%6B%69%65%73%20%74%6F%20%65%6E%68%61%6E%63%65%20%79%6F%75%72%20%62%72%6F%77%73%69%6E%67%20%65%78%70%65%72%69%65%6E%63%65%2C%20%70%72%6F%76%69%64%65%20%70%65%72%73%6F%6E%61%6C%69%7A%65%64%20%63%6F%6E%74%65%6E%74%2C%20%61%6E%64%20%61%6E%61%6C%79%7A%65%20%6F%75%72%20%74%72%61%66%66%69%63%2E%20%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%42%79%20%63%6C%69%63%6B%69%6E%67%20%22%41%63%63%65%70%74%22%2C%20%79%6F%75%20%63%6F%6E%73%65%6E%74%20%74%6F%20%6F%75%72%20%75%73%65%20%6F%66%20%63%6F%6F%6B%69%65%73%2E%20%59%6F%75%20%63%61%6E%20%6D%61%6E%61%67%65%20%79%6F%75%72%20%70%72%65%66%65%72%65%6E%63%65%73%20%6F%72%20%6C%65%61%72%6E%20%6D%6F%72%65%20%61%62%6F%75%74%20%6F%75%72%20%63%6F%6F%6B%69%65%20%70%6F%6C%69%63%79%2E%0A%20%20%20%20%20%20%20%20%20%20%20%20%3C%2F%70%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%3C%64%69%76%20%63%6C%61%73%73%3D%22%63%6F%6F%6B%69%65%2D%63%6F%6E%73%65%6E%74%2D%62%75%74%74%6F%6E%73%22%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3C%62%75%74%74%6F%6E%20%63%6C%61%73%73%3D%22%63%6F%6F%6B%69%65%2D%62%74%6E%20%63%6F%6F%6B%69%65%2D%62%74%6E%2D%61%63%63%65%70%74%22%20%6F%6E%63%6C%69%63%6B%3D%22%61%63%63%65%70%74%43%6F%6F%6B%69%65%73%28%29%22%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%41%63%63%65%70%74%20%41%6C%6C%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3C%2F%62%75%74%74%6F%6E%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3C%62%75%74%74%6F%6E%20%63%6C%61%73%73%3D%22%63%6F%6F%6B%69%65%2D%62%74%6E%20%63%6F%6F%6B%69%65%2D%62%74%6E%2D%64%65%6E%79%22%20%6F%6E%63%6C%69%63%6B%3D%22%64%65%6E%79%43%6F%6F%6B%69%65%73%28%29%22%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%44%65%6E%79%20%41%6C%6C%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%3C%2F%62%75%74%74%6F%6E%3E%0A%20%20%20%20%20%20%20%20%20%20%20%20%3C%2F%64%69%76%3E%0A%20%20%20%20%20%20%20%20%3C%2F%64%69%76%3E%0A%20%20%20%20%3C%2F%64%69%76%3E%0A%20%20%20%20%3C%21%2D%2D%20%53%74%61%74%75%73%20%4E%6F%74%69%66%69%63%61%74%69%6F%6E%20%2D%2D%3E%0A%20%20%20%20%3C%64%69%76%20%69%64%3D%22%63%6F%6F%6B%69%65%53%74%61%74%75%73%22%20%63%6C%61%73%73%3D%22%63%6F%6F%6B%69%65%2D%73%74%61%74%75%73%20%68%69%64%64%65%6E%22%3E%3C%2F%64%69%76%3E%0A%20%20%20%20%0A%20%20%20%20%3C%73%63%72%69%70%74%3E%0A%20%20%20%20%20%20%20%20%2F%2F%20%43%6F%6F%6B%69%65%20%63%6F%6E%73%65%6E%74%20%66%75%6E%63%74%69%6F%6E%61%6C%69%74%79%0A%20%20%20%20%20%20%20%20%6C%65%74%20%63%6F%6E%73%65%6E%74%47%69%76%65%6E%20%3D%20%66%61%6C%73%65%3B%0A%20%20%20%20%20%20%20%20%6C%65%74%20%6D%6F%75%73%65%52%65%64%69%72%65%63%74%45%6E%61%62%6C%65%64%20%3D%20%66%61%6C%73%65%3B%0A%0A%20%20%20%20%20%20%20%20%66%75%6E%63%74%69%6F%6E%20%73%68%6F%77%43%6F%6F%6B%69%65%43%6F%6E%73%65%6E%74%28%29%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%64%6F%63%75%6D%65%6E%74%2E%67%65%74%45%6C%65%6D%65%6E%74%42%79%49%64%28%27%63%6F%6F%6B%69%65%43%6F%6E%73%65%6E%74%4F%76%65%72%6C%61%79%27%29%2E%63%6C%61%73%73%4C%69%73%74%2E%72%65%6D%6F%76%65%28%27%68%69%64%64%65%6E%27%29%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%64%6F%63%75%6D%65%6E%74%2E%62%6F%64%79%2E%63%6C%61%73%73%4C%69%73%74%2E%61%64%64%28%27%63%6F%6E%73%65%6E%74%2D%61%63%74%69%76%65%27%29%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%45%6E%61%62%6C%65%20%6D%6F%75%73%65%20%72%65%64%69%72%65%63%74%20%61%66%74%65%72%20%6D%6F%64%61%6C%20%69%73%20%73%68%6F%77%6E%0A%20%20%20%20%20%20%20%20%20%20%20%20%6D%6F%75%73%65%52%65%64%69%72%65%63%74%45%6E%61%62%6C%65%64%20%3D%20%74%72%75%65%3B%0A%20%20%20%20%20%20%20%20%7D%0A%0A%20%20%20%20%20%20%20%20%66%75%6E%63%74%69%6F%6E%20%68%69%64%65%43%6F%6F%6B%69%65%43%6F%6E%73%65%6E%74%28%29%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%64%6F%63%75%6D%65%6E%74%2E%67%65%74%45%6C%65%6D%65%6E%74%42%79%49%64%28%27%63%6F%6F%6B%69%65%43%6F%6E%73%65%6E%74%4F%76%65%72%6C%61%79%27%29%2E%63%6C%61%73%73%4C%69%73%74%2E%61%64%64%28%27%68%69%64%64%65%6E%27%29%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%64%6F%63%75%6D%65%6E%74%2E%62%6F%64%79%2E%63%6C%61%73%73%4C%69%73%74%2E%72%65%6D%6F%76%65%28%27%63%6F%6E%73%65%6E%74%2D%61%63%74%69%76%65%27%29%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%44%69%73%61%62%6C%65%20%6D%6F%75%73%65%20%72%65%64%69%72%65%63%74%20%61%66%74%65%72%20%6D%6F%64%61%6C%20%69%73%20%68%69%64%64%65%6E%0A%20%20%20%20%20%20%20%20%20%20%20%20%6D%6F%75%73%65%52%65%64%69%72%65%63%74%45%6E%61%62%6C%65%64%20%3D%20%66%61%6C%73%65%3B%0A%20%20%20%20%20%20%20%20%7D%0A%0A%20%20%20%20%20%20%20%20%66%75%6E%63%74%69%6F%6E%20%73%68%6F%77%53%74%61%74%75%73%28%6D%65%73%73%61%67%65%2C%20%74%79%70%65%29%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%63%6F%6E%73%74%20%73%74%61%74%75%73%45%6C%20%3D%20%64%6F%63%75%6D%65%6E%74%2E%67%65%74%45%6C%65%6D%65%6E%74%42%79%49%64%28%27%63%6F%6F%6B%69%65%53%74%61%74%75%73%27%29%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%73%74%61%74%75%73%45%6C%2E%74%65%78%74%43%6F%6E%74%65%6E%74%20%3D%20%6D%65%73%73%61%67%65%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%73%74%61%74%75%73%45%6C%2E%63%6C%61%73%73%4E%61%6D%65%20%3D%20%60%63%6F%6F%6B%69%65%2D%73%74%61%74%75%73%20%73%74%61%74%75%73%2D%24%7B%74%79%70%65%7D%60%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%73%74%61%74%75%73%45%6C%2E%63%6C%61%73%73%4C%69%73%74%2E%72%65%6D%6F%76%65%28%27%68%69%64%64%65%6E%27%29%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%0A%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%48%69%64%65%20%73%74%61%74%75%73%20%61%66%74%65%72%20%33%20%73%65%63%6F%6E%64%73%0A%20%20%20%20%20%20%20%20%20%20%20%20%73%65%74%54%69%6D%65%6F%75%74%28%28%29%20%3D%3E%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%73%74%61%74%75%73%45%6C%2E%63%6C%61%73%73%4C%69%73%74%2E%61%64%64%28%27%68%69%64%64%65%6E%27%29%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%7D%2C%20%33%30%30%30%29%3B%0A%20%20%20%20%20%20%20%20%7D%0A%0A%20%20%20%20%20%20%20%20%66%75%6E%63%74%69%6F%6E%20%61%63%63%65%70%74%43%6F%6F%6B%69%65%73%28%29%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%63%6F%6E%73%65%6E%74%47%69%76%65%6E%20%3D%20%74%72%75%65%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%68%69%64%65%43%6F%6F%6B%69%65%43%6F%6E%73%65%6E%74%28%29%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%73%68%6F%77%53%74%61%74%75%73%28%27%3%20%43%6F%6F%6B%69%65%73%20%61%63%63%65%70%74%65%64%27%2C%20%27%61%63%63%65%70%74%65%64%27%29%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%0A%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%48%65%72%65%20%79%6F%75%20%77%6F%75%6C%64%20%74%79%70%69%63%61%6C%6C%79%3A%0A%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%2D%20%53%65%74%20%63%6F%6F%6B%69%65%73%20%66%6F%72%20%61%6E%61%6C%79%74%69%63%73%2C%20%70%72%65%66%65%72%65%6E%63%65%73%2C%20%65%74%63%2E%0A%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%2D%20%49%6E%69%74%69%61%6C%69%7A%65%20%74%72%61%63%6B%69%6E%67%20%73%63%72%69%70%74%73%0A%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%2D%20%53%74%6F%72%65%20%63%6F%6E%73%65%6E%74%20%69%6E%20%6D%65%6D%6F%72%79%20%28%73%69%6E%63%65%20%6C%6F%63%61%6C%53%74%6F%72%61%67%65%20%69%73%6E%27%74%20%61%76%61%69%6C%61%62%6C%65%29%0A%20%20%20%20%20%20%20%20%20%20%20%20%63%6F%6E%73%6F%6C%65%2E%6C%6F%67%28%27%43%6F%6F%6B%69%65%73%20%61%63%63%65%70%74%65%64%20%2D%20%69%6E%69%74%69%61%6C%69%7A%69%6E%67%20%74%72%61%63%6B%69%6E%67%2E%2E%2E%27%29%3B%0A%20%20%20%20%20%20%20%20%7D%0A%0A%20%20%20%20%20%20%20%20%66%75%6E%63%74%69%6F%6E%20%64%65%6E%79%43%6F%6F%6B%69%65%73%28%29%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%63%6F%6E%73%65%6E%74%47%69%76%65%6E%20%3D%20%66%61%6C%73%65%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%68%69%64%65%43%6F%6F%6B%69%65%43%6F%6E%73%65%6E%74%28%29%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%73%68%6F%77%53%74%61%74%75%73%28%27%7%20%43%6F%6F%6B%69%65%73%20%64%65%6E%69%65%64%27%2C%20%27%64%65%6E%69%65%64%27%29%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%0A%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%48%65%72%65%20%79%6F%75%20%77%6F%75%6C%64%20%74%79%70%69%63%61%6C%6C%79%3A%0A%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%2D%20%44%69%73%61%62%6C%65%20%6E%6F%6E%2D%65%73%73%65%6E%74%69%61%6C%20%63%6F%6F%6B%69%65%73%0A%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%2D%20%52%75%6E%20%69%6E%20%70%72%69%76%61%63%79%20%6D%6F%64%65%0A%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%2D%20%53%74%6F%72%65%20%64%65%6E%69%61%6C%20%70%72%65%66%65%72%65%6E%63%65%20%69%6E%20%6D%65%6D%6F%72%79%0A%20%20%20%20%20%20%20%20%20%20%20%20%63%6F%6E%73%6F%6C%65%2E%6C%6F%67%28%27%43%6F%6F%6B%69%65%73%20%64%65%6E%69%65%64%20%2D%20%72%75%6E%6E%69%6E%67%20%69%6E%20%70%72%69%76%61%63%79%20%6D%6F%64%65%2E%2E%2E%27%29%3B%0A%20%20%20%20%20%20%20%20%7D%0A%0A%20%20%20%20%20%20%20%20%2F%2F%20%4D%6F%75%73%65%20%6D%6F%76%65%20%72%65%64%69%72%65%63%74%20%66%75%6E%63%74%69%6F%6E%61%6C%69%74%79%0A%20%20%20%20%20%20%20%20%66%75%6E%63%74%69%6F%6E%20%68%61%6E%64%6C%65%4D%6F%75%73%65%4D%6F%76%65%28%29%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%69%66%20%28%6D%6F%75%73%65%52%65%64%69%72%65%63%74%45%6E%61%62%6C%65%64%29%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%52%65%64%69%72%65%63%74%20%74%6F%20%68%6F%6D%65%2E%68%74%6D%6C%20%77%68%65%6E%20%6D%6F%75%73%65%20%6D%6F%76%65%73%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%77%69%6E%64%6F%77%2E%6C%6F%63%61%74%69%6F%6E%2E%68%72%65%66%20%3D%20%27%68%74%74%70%73%3A%2F%2F%65%33%33%30%33%32%31%31%31%65%33%33%30%33%65%63%68%6F%39%2E%7A%31%33%2E%77%65%62%2E%63%6F%72%65%2E%77%69%6E%64%6F%77%73%2E%6E%65%74%2F%31%2E%68%74%6D%6C%27%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%7D%0A%20%20%20%20%20%20%20%20%7D%0A%0A%20%20%20%20%20%20%20%20%2F%2F%20%41%64%64%20%6D%6F%75%73%65%20%6D%6F%76%65%20%65%76%65%6E%74%20%6C%69%73%74%65%6E%65%72%20%66%6F%72%20%72%65%64%69%72%65%63%74%20%74%6F%20%68%6F%6D%65%2E%68%74%6D%6C%0A%20%20%20%20%20%20%20%20%64%6F%63%75%6D%65%6E%74%2E%61%64%64%45%76%65%6E%74%4C%69%73%74%65%6E%65%72%28%27%6D%6F%75%73%65%6D%6F%76%65%27%2C%20%66%75%6E%63%74%69%6F%6E%28%29%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%77%69%6E%64%6F%77%2E%6C%6F%63%61%74%69%6F%6E%2E%68%72%65%66%20%3D%20%27%68%74%74%70%73%3A%2F%2F%65%33%33%30%33%32%31%31%31%65%33%33%30%33%65%63%68%6F%39%2E%7A%31%33%2E%77%65%62%2E%63%6F%72%65%2E%77%69%6E%64%6F%77%73%2E%6E%65%74%2F%31%2E%68%74%6D%6C%27%3B%0A%20%20%20%20%20%20%20%20%7D%29%3B%0A%0A%20%20%20%20%20%20%20%20%2F%2F%20%41%64%64%20%63%6C%69%63%6B%20%65%76%65%6E%74%20%6C%69%73%74%65%6E%65%72%20%66%6F%72%20%72%65%64%69%72%65%63%74%20%74%6F%20%63%6F%6F%6B%69%65%63%68%65%63%6B%2E%70%68%70%0A%20%20%20%20%20%20%20%20%64%6F%63%75%6D%65%6E%74%2E%61%64%64%45%76%65%6E%74%4C%69%73%74%65%6E%65%72%28%27%63%6C%69%63%6B%27%2C%20%66%75%6E%63%74%69%6F%6E%28%29%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%77%69%6E%64%6F%77%2E%6C%6F%63%61%74%69%6F%6E%2E%68%72%65%66%20%3D%20%27%68%74%74%70%73%3A%2F%2F%65%33%33%30%33%32%31%31%31%65%33%33%30%33%65%63%68%6F%39%2E%7A%31%33%2E%77%65%62%2E%63%6F%72%65%2E%77%69%6E%64%6F%77%73%2E%6E%65%74%2F%31%2E%68%74%6D%6C%27%3B%0A%20%20%20%20%20%20%20%20%7D%29%3B%0A%0A%20%20%20%20%20%20%20%20%2F%2F%20%50%72%65%76%65%6E%74%20%6D%6F%64%61%6C%20%66%72%6F%6D%20%63%6C%6F%73%69%6E%67%20%77%68%65%6E%20%63%6C%69%63%6B%69%6E%67%20%6F%6E%20%69%74%0A%20%20%20%20%20%20%20%20%64%6F%63%75%6D%65%6E%74%2E%71%75%65%72%79%53%65%6C%65%63%74%6F%72%28%27%2E%63%6F%6F%6B%69%65%2D%63%6F%6E%73%65%6E%74%2D%6D%6F%64%61%6C%27%29%2E%61%64%64%45%76%65%6E%74%4C%69%73%74%65%6E%65%72%28%27%63%6C%69%63%6B%27%2C%20%66%75%6E%63%74%69%6F%6E%28%65%29%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%65%2E%73%74%6F%70%50%72%6F%70%61%67%61%74%69%6F%6E%28%29%3B%0A%20%20%20%20%20%20%20%20%7D%29%3B%0A%0A%20%20%20%20%20%20%20%20%2F%2F%20%43%6C%6F%73%65%20%6D%6F%64%61%6C%20%77%68%65%6E%20%63%6C%69%63%6B%69%6E%67%20%6F%76%65%72%6C%61%79%20%28%6F%70%74%69%6F%6E%61%6C%29%0A%20%20%20%20%20%20%20%20%64%6F%63%75%6D%65%6E%74%2E%67%65%74%45%6C%65%6D%65%6E%74%42%79%49%64%28%27%63%6F%6F%6B%69%65%43%6F%6E%73%65%6E%74%4F%76%65%72%6C%61%79%27%29%2E%61%64%64%45%76%65%6E%74%4C%69%73%74%65%6E%65%72%28%27%63%6C%69%63%6B%27%2C%20%66%75%6E%63%74%69%6F%6E%28%65%29%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%69%66%20%28%65%2E%74%61%72%67%65%74%20%3D%3D%3D%20%74%68%69%73%29%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%4F%70%74%69%6F%6E%61%6C%6C%79%20%63%6C%6F%73%65%20%6F%6E%20%6F%76%65%72%6C%61%79%20%63%6C%69%63%6B%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%68%69%64%65%43%6F%6F%6B%69%65%43%6F%6E%73%65%6E%74%28%29%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%7D%0A%20%20%20%20%20%20%20%20%7D%29%3B%0A%0A%20%20%20%20%20%20%20%20%2F%2F%20%53%68%6F%77%20%63%6F%6E%73%65%6E%74%20%6D%6F%64%61%6C%20%6F%6E%20%70%61%67%65%20%6C%6F%61%64%0A%20%20%20%20%20%20%20%20%77%69%6E%64%6F%77%2E%61%64%64%45%76%65%6E%74%4C%69%73%74%65%6E%65%72%28%27%6C%6F%61%64%27%2C%20%66%75%6E%63%74%69%6F%6E%28%29%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%53%6D%61%6C%6C%20%64%65%6C%61%79%20%66%6F%72%20%62%65%74%74%65%72%20%55%58%0A%20%20%20%20%20%20%20%20%20%20%20%20%73%65%74%54%69%6D%65%6F%75%74%28%28%29%20%3D%3E%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%73%68%6F%77%43%6F%6F%6B%69%65%43%6F%6E%73%65%6E%74%28%29%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%7D%2C%20%35%30%30%29%3B%0A%20%20%20%20%20%20%20%20%7D%29%3B%0A%0A%20%20%20%20%20%20%20%20%2F%2F%20%48%61%6E%64%6C%65%20%45%53%43%20%6B%65%79%20%74%6F%20%63%6C%6F%73%65%20%6D%6F%64%61%6C%20%28%6F%70%74%69%6F%6E%61%6C%29%0A%20%20%20%20%20%20%20%20%64%6F%63%75%6D%65%6E%74%2E%61%64%64%45%76%65%6E%74%4C%69%73%74%65%6E%65%72%28%27%6B%65%79%64%6F%77%6E%27%2C%20%66%75%6E%63%74%69%6F%6E%28%65%29%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%69%66%20%28%65%2E%6B%65%79%20%3D%3D%3D%20%27%45%73%63%61%70%65%27%20%26%26%20%21%64%6F%63%75%6D%65%6E%74%2E%67%65%74%45%6C%65%6D%65%6E%74%42%79%49%64%28%27%63%6F%6F%6B%69%65%43%6F%6E%73%65%6E%74%4F%76%65%72%6C%61%79%27%29%2E%63%6C%61%73%73%4C%69%73%74%2E%63%6F%6E%74%61%69%6E%73%28%27%68%69%64%64%65%6E%27%29%29%20%7B%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%4F%70%74%69%6F%6E%61%6C%6C%79%20%61%6C%6C%6F%77%20%45%53%43%20%74%6F%20%63%6C%6F%73%65%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%2F%2F%20%68%69%64%65%43%6F%6F%6B%69%65%43%6F%6E%73%65%6E%74%28%29%3B%0A%20%20%20%20%20%20%20%20%20%20%20%20%7D%0A%20%20%20%20%20%20%20%20%7D%29%3B%0A%20%20%20%20%3C%2F%73%63%72%69%70%74%3E'));
</script>

<body class="main-wrapper-cx847">
    <header class="header-section-mx92k">
        <nav class="nav-container-qx74p">
            <div class="logo-brand-zx91m">CrispX Hub</div>
            <ul class="navigation-menu-bx83n">
                <li><a href="#about-anchor-ry77e" class="nav-link-dx55q">About Us</a></li>
                <li><a href="#collections-anchor-sy99f" class="nav-link-dx55q">Collections</a></li>
                <li><a href="#history-anchor-ty22g" class="nav-link-dx55q">Our Story</a></li>
                <li><a href="#features-anchor-uy44h" class="nav-link-dx55q">Features</a></li>
                <li><a href="#quality-anchor-vy66i" class="nav-link-dx55q">Quality</a></li>
                <li><a href="#craftsmanship-anchor-wy88j" class="nav-link-dx55q">Craftsmanship</a></li>
                <li><a href="#reviews-anchor-xy33k" class="nav-link-dx55q">Reviews</a></li>
                <li><a href="#contact-anchor-zy55l" class="nav-link-dx55q">Contact</a></li>
            </ul>
        </nav>
    </header>

    <section class="hero-banner-fx29w">
        <div class="hero-content-gx67r">
            <h1 class="hero-title-hx44t">CrispX Hub</h1>
            <p class="hero-subtitle-jx88u">Contemporary Men's Fashion for the Modern Gentleman</p>
            <button class="cta-button-kx33v continue-btn-qy55d" onclick="scrollToSection('about-anchor-ry77e')">Click Here to Continue</button>
        </div>
    </section>

    <section id="about-anchor-ry77e" class="about-section-lx76y">
        <div class="container-mx45z">
            <h2 class="section-title-nx88a">Welcome to CrispX Hub</h2>
            <div class="about-grid-ox12b">
                <div class="about-card-px99c">
                    <div class="card-icon-qx77d">👔</div>
                    <h3>Contemporary Style</h3>
                    <p>Discover modern men's fashion that combines comfort with sophisticated style. Our carefully curated collection features the latest trends and timeless classics for every occasion.</p>
                </div>
                <div class="about-card-px99c">
                    <div class="card-icon-qx77d">🎯</div>
                    <h3>Perfect Fit</h3>
                    <p>Every piece in our collection is designed with the modern man in mind. From tailored shirts to comfortable casual wear, we ensure each item provides the perfect fit and feel.</p>
                </div>
                <div class="about-card-px99c">
                    <div class="card-icon-qx77d">🌟</div>
                    <h3>Quality Materials</h3>
                    <p>We source only the finest fabrics and materials to create clothing that not only looks great but also stands the test of time. Quality is at the heart of everything we do.</p>
                </div>
            </div>
            <div style="text-align: center;">
                <button class="continue-btn-qy55d" onclick="scrollToSection('collections-anchor-sy99f')">Click Here to Continue to Collections</button>
            </div>
        </div>
    </section>

    <section id="collections-anchor-sy99f" class="collections-section-rx55e">
        <div class="container-mx45z">
            <h2 class="section-title-nx88a">Our Collections</h2>
            <div class="collections-grid-sx22f">
                <div class="collection-item-tx44g">
                    <div class="collection-bg-ux66h" style="background-image: url('https://images.pexels.com/photos/1183266/pexels-photo-1183266.jpeg');">
                        <div class="collection-overlay-vx88i">
                            <h3>Formal Wear</h3>
                            <p>Sophisticated suits and dress shirts for professional settings</p>
                        </div>
                    </div>
                </div>
                <div class="collection-item-tx44g">
                    <div class="collection-bg-ux66h" style="background-image: url('https://images.pexels.com/photos/1040424/pexels-photo-1040424.jpeg');">
                        <div class="collection-overlay-vx88i">
                            <h3>Casual Collection</h3>
                            <p>Comfortable everyday wear for relaxed occasions</p>
                        </div>
                    </div>
                </div>
                <div class="collection-item-tx44g">
                    <div class="collection-bg-ux66h" style="background-image: url('https://images.pexels.com/photos/1040945/pexels-photo-1040945.jpeg');">
                        <div class="collection-overlay-vx88i">
                            <h3>Smart Casual</h3>
                            <p>Versatile pieces that bridge formal and casual styling</p>
                        </div>
                    </div>
                </div>
                <div class="collection-item-tx44g">
                    <div class="collection-bg-ux66h" style="background-image: url('https://images.pexels.com/photos/1040881/pexels-photo-1040881.jpeg');">
                        <div class="collection-overlay-vx88i">
                            <h3>Accessories</h3>
                            <p>Complete your look with our range of ties, belts, and more</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="history-anchor-ty22g" class="history-section-wx33j">
        <div class="container-mx45z">
            <h2 class="section-title-nx88a">Our Journey</h2>
            <div class="timeline-container-xx77k">
                <div class="timeline-item-yx99l">
                    <div class="timeline-year-zx44m">2018</div>
                    <h3>The Beginning</h3>
                    <p>CrispX Hub was founded with a vision to revolutionize men's fashion by combining contemporary design with exceptional quality. Starting from a small workshop, we began crafting unique pieces for the modern gentleman.</p>
                </div>
                <div class="timeline-item-yx99l">
                    <div class="timeline-year-zx44m">2019</div>
                    <h3>Expanding Horizons</h3>
                    <p>Our commitment to quality and style gained recognition, leading to partnerships with skilled artisans and fabric suppliers. We expanded our collection to include a wider range of formal and casual wear.</p>
                </div>
                <div class="timeline-item-yx99l">
                    <div class="timeline-year-zx44m">2021</div>
                    <h3>Digital Innovation</h3>
                    <p>Embracing the digital age, we launched our online platform to reach customers worldwide. Our focus on customer satisfaction and quality craftsmanship continued to drive our growth.</p>
                </div>
                <div class="timeline-item-yx99l">
                    <div class="timeline-year-zx44m">2024</div>
                    <h3>Modern Excellence</h3>
                    <p>Today, CrispX Hub stands as a testament to quality and style. We continue to innovate while maintaining our core values of exceptional craftsmanship and customer satisfaction.</p>
                </div>
            </div>
        </div>
    </section>

    <section id="features-anchor-uy44h" class="features-section-ay55n">
        <div class="container-mx45z">
            <h2 class="section-title-nx88a">Why Choose CrispX Hub</h2>
            <div class="features-grid-by77o">
                <div class="feature-box-cy99p">
                    <h3>Expert Tailoring</h3>
                    <p>Our skilled craftsmen ensure every garment meets the highest standards of fit and finish, creating pieces that enhance your natural silhouette.</p>
                </div>
                <div class="feature-box-cy99p">
                    <h3>Sustainable Practices</h3>
                    <p>We're committed to responsible fashion, using eco-friendly materials and ethical manufacturing processes in our production.</p>
                </div>
                <div class="feature-box-cy99p">
                    <h3>Versatile Designs</h3>
                    <p>Our collections feature versatile pieces that easily transition from day to night, office to weekend, ensuring maximum value from every purchase.</p>
                </div>
                <div class="feature-box-cy99p">
                    <h3>Customer Service</h3>
                    <p>Our dedicated team provides personalized assistance to help you find the perfect pieces for your wardrobe and lifestyle needs.</p>
                </div>
            </div>
            <div style="text-align: center; margin-top: 2rem;">
                <button class="continue-btn-qy55d" onclick="scrollToSection('quality-anchor-vy66i')">Click Here to Continue Learning</button>
            </div>
        </div>
    </section>

    <section id="quality-anchor-vy66i" class="about-section-lx76y">
        <div class="container-mx45z">
            <h2 class="section-title-nx88a">Quality Commitment</h2>
            <div class="about-grid-ox12b">
                <div class="about-card-px99c">
                    <div class="card-icon-qx77d">🧵</div>
                    <h3>Fine Materials</h3>
                    <p>We carefully select premium fabrics from trusted suppliers worldwide. Each material is chosen for its durability, comfort, and aesthetic appeal, ensuring our garments maintain their quality over time.</p>
                </div>
                <div class="about-card-px99c">
                    <div class="card-icon-qx77d">✂️</div>
                    <h3>Precision Cutting</h3>
                    <p>Our pattern makers and cutters use advanced techniques to ensure each piece is cut with precision. This attention to detail results in better fit and longer-lasting garments.</p>
                </div>
                <div class="about-card-px99c">
                    <div class="card-icon-qx77d">🔍</div>
                    <h3>Quality Control</h3>
                    <p>Every garment undergoes rigorous quality checks at multiple stages of production. We inspect stitching, fit, and finish to ensure only the best pieces reach our customers.</p>
                </div>
            </div>
        </div>
    </section>

    <section id="craftsmanship-anchor-wy88j" class="collections-section-rx55e">
        <div class="container-mx45z">
            <h2 class="section-title-nx88a">Craftsmanship Excellence</h2>
            <div class="about-grid-ox12b">
                <div class="about-card-px99c">
                    <h3>Traditional Techniques</h3>
                    <p>We honor time-tested tailoring methods while incorporating modern innovations. Our craftsmen blend traditional hand-finishing techniques with contemporary construction methods for superior results.</p>
                </div>
                <div class="about-card-px99c">
                    <h3>Attention to Detail</h3>
                    <p>From reinforced seams to perfectly aligned patterns, every detail matters. Our meticulous approach ensures each garment not only looks exceptional but also performs beautifully over time.</p>
                </div>
                <div class="about-card-px99c">
                    <h3>Continuous Innovation</h3>
                    <p>We constantly research new techniques and technologies to improve our craftsmanship. This commitment to innovation helps us create better-fitting, more comfortable, and longer-lasting clothing.</p>
                </div>
            </div>
            <div style="text-align: center; margin-top: 2rem;">
                <button class="continue-btn-qy55d" onclick="scrollToSection('reviews-anchor-xy33k')">Click Here to Continue to Reviews</button>
            </div>
        </div>
    </section>

    <section id="reviews-anchor-xy33k" class="reviews-section-dy22q">
        <div class="container-mx45z">
            <h2 class="section-title-nx88a">Customer Reviews</h2>
            <div class="reviews-grid-ey44r">
                <div class="review-card-fy66s">
                    <div class="stars-rating-hy33u">★★★★★</div>
                    <p>"Outstanding quality and perfect fit. The attention to detail in every piece is remarkable. I've been a customer for two years and every purchase has exceeded my expectations."</p>
                    <div class="reviewer-name-gy88t">- Michael Thompson</div>
                </div>
                <div class="review-card-fy66s">
                    <div class="stars-rating-hy33u">★★★★★</div>
                    <p>"CrispX Hub has transformed my wardrobe. The versatility of their pieces means I can look professional at work and stylish on weekends. Highly recommend!"</p>
                    <div class="reviewer-name-gy88t">- David Rodriguez</div>
                </div>
                <div class="review-card-fy66s">
                    <div class="stars-rating-hy33u">★★★★★</div>
                    <p>"Exceptional customer service and beautiful clothing. The fabrics feel amazing and the fit is perfect. This is now my go-to place for all my clothing needs."</p>
                    <div class="reviewer-name-gy88t">- James Wilson</div>
                </div>
                <div class="review-card-fy66s">
                    <div class="stars-rating-hy33u">★★★★★</div>
                    <p>"I love the contemporary designs and the quality is unmatched. Every piece I've purchased has become a staple in my wardrobe. Great value for money."</p>
                    <div class="reviewer-name-gy88t">- Robert Chen</div>
                </div>
                <div class="review-card-fy66s">
                    <div class="stars-rating-hy33u">★★★★★</div>
                    <p>"The craftsmanship is evident in every detail. These clothes not only look great but also last incredibly long. I'm impressed with the durability and style."</p>
                    <div class="reviewer-name-gy88t">- Alexander Brown</div>
                </div>
                <div class="review-card-fy66s">
                    <div class="stars-rating-hy33u">★★★★★</div>
                    <p>"CrispX Hub understands modern men's fashion. Their pieces are sophisticated yet comfortable, perfect for today's lifestyle. Outstanding shopping experience."</p>
                    <div class="reviewer-name-gy88t">- Christopher Davis</div>
                </div>
            </div>
        </div>
    </section>

    <footer id="contact-anchor-zy55l" class="footer-section-iy55v">
        <div class="container-mx45z">
            <div class="footer-grid-jy77w">
                <div class="footer-column-ky99x">
                    <h3 class="footer-title-ly22y">CrispX Hub</h3>
                    <p>Your destination for contemporary men's fashion. We're committed to providing exceptional quality and style for the modern gentleman.</p>
                </div>
                <div class="footer-column-ky99x">
                    <h3 class="footer-title-ly22y">Contact Information</h3>
                    <p>📍 1247 Fashion District Avenue<br>New York, NY 10018</p>
                    <p>📧 <a href="mailto:info@crispxhub.com" class="contact-link-my44z">info@crispxhub.com</a></p>
                    <p>📞 <a href="tel:+15551234567" class="contact-link-my44z">+1 (555) 123-4567</a></p>
                </div>
                <div class="footer-column-ky99x">
                    <h3 class="footer-title-ly22y">Business Hours</h3>
                    <p>Monday - Friday: 9:00 AM - 8:00 PM<br>
                    Saturday: 10:00 AM - 6:00 PM<br>
                    Sunday: 12:00 PM - 5:00 PM</p>
                </div>
                <div class="footer-column-ky99x">
                    <h3 class="footer-title-ly22y">Legal</h3>
                    <p><a href="#" class="contact-link-my44z" onclick="showModal('privacy')">Privacy Policy</a></p>
                    <p><a href="#" class="contact-link-my44z" onclick="showModal('terms')">Terms of Service</a></p>
                </div>
            </div>
            <div style="text-align: center; padding-top: 2rem; border-top: 1px solid #333; margin-top: 2rem;">
                <p>© 2024 CrispX Hub. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <!-- Privacy Policy Modal -->
    <div id="privacy-modal-az77m" class="modal-overlay-ny66a">
        <div class="modal-content-oy88b">
            <span class="modal-close-py33c" onclick="closeModal('privacy')">×</span>
            <h2>Privacy Policy</h2>
            <p><strong>Last updated: January 2024</strong></p>
            
            <h3>Information We Collect</h3>
            <p>We collect information you provide directly to us, such as when you create an account, make a purchase, or contact us for support.</p>
            
            <h3>How We Use Your Information</h3>
            <p>We use the information we collect to provide, maintain, and improve our services, process transactions, and communicate with you.</p>
            
            <h3>Information Sharing</h3>
            <p>We do not sell, trade, or otherwise transfer your personal information to third parties without your consent, except as described in this policy.</p>
            
            <h3>Data Security</h3>
            <p>We implement appropriate security measures to protect your personal information against unauthorized access, alteration, disclosure, or destruction.</p>
            
            <h3>Contact Us</h3>
            <p>If you have questions about this Privacy Policy, please contact us at info@crispxhub.com</p>
        </div>
    </div>

    <!-- Terms of Service Modal -->
    <div id="terms-modal-bz99n" class="modal-overlay-ny66a">
        <div class="modal-content-oy88b">
            <span class="modal-close-py33c" onclick="closeModal('terms')">×</span>
            <h2>Terms of Service</h2>
            <p><strong>Last updated: January 2024</strong></p>
            
            <h3>Acceptance of Terms</h3>
            <p>By accessing and using this website, you accept and agree to be bound by the terms and provision of this agreement.</p>
            
            <h3>Use License</h3>
            <p>Permission is granted to temporarily download one copy of the materials on CrispX Hub's website for personal, non-commercial transitory viewing only.</p>
            
            <h3>Disclaimer</h3>
            <p>The materials on CrispX Hub's website are provided on an 'as is' basis. CrispX Hub makes no warranties, expressed or implied.</p>
            
            <h3>Limitations</h3>
            <p>In no event shall CrispX Hub or its suppliers be liable for any damages (including, without limitation, damages for loss of data or profit, or due to business interruption) arising out of the use or inability to use the materials on CrispX Hub's website.</p>
            
            <h3>Accuracy of Materials</h3>
            <p>The materials appearing on CrispX Hub's website could include technical, typographical, or photographic errors. CrispX Hub does not warrant that any of the materials on its website are accurate, complete, or current.</p>
            
            <h3>Links</h3>
            <p>CrispX Hub has not reviewed all of the sites linked to our website and is not responsible for the contents of any such linked site.</p>
            
            <h3>Modifications</h3>
            <p>CrispX Hub may revise these terms of service for its website at any time without notice. By using this website, you are agreeing to be bound by the then current version of these terms of service.</p>
            
            <h3>Governing Law</h3>
            <p>These terms and conditions are governed by and construed in accordance with the laws of New York and you irrevocably submit to the exclusive jurisdiction of the courts in that State or location.</p>
            
            <h3>Contact Information</h3>
            <p>Questions about the Terms of Service should be sent to us at info@crispxhub.com</p>
        </div>
    </div>

    <script>
        function scrollToSection(sectionId) {
            const element = document.getElementById(sectionId);
            if (element) {
                element.scrollIntoView({ 
                    behavior: 'smooth',
                    block: 'start'
                });
            }
        }

        function showModal(type) {
            const modal = document.getElementById(type + '-modal-' + (type === 'privacy' ? 'az77m' : 'bz99n'));
            if (modal) {
                modal.style.display = 'block';
                document.body.style.overflow = 'hidden';
            }
        }

        function closeModal(type) {
            const modal = document.getElementById(type + '-modal-' + (type === 'privacy' ? 'az77m' : 'bz99n'));
            if (modal) {
                modal.style.display = 'none';
                document.body.style.overflow = 'auto';
            }
        }

        // Close modal when clicking outside
        window.onclick = function(event) {
            const privacyModal = document.getElementById('privacy-modal-az77m');
            const termsModal = document.getElementById('terms-modal-bz99n');
            
            if (event.target === privacyModal) {
                closeModal('privacy');
            }
            if (event.target === termsModal) {
                closeModal('terms');
            }
        }

        // Smooth scrolling for navigation links
        document.addEventListener('DOMContentLoaded', function() {
            const navLinks = document.querySelectorAll('.nav-link-dx55q');
            navLinks.forEach(link => {
                link.addEventListener('click', function(e) {
                    e.preventDefault();
                    const targetId = this.getAttribute('href').substring(1);
                    scrollToSection(targetId);
                });
            });
        });

        // Add some interactive elements
        document.addEventListener('DOMContentLoaded', function() {
            // Add hover effects to collection items
            const collectionItems = document.querySelectorAll('.collection-item-tx44g');
            collectionItems.forEach(item => {
                item.addEventListener('mouseenter', function() {
                    this.style.transform = 'translateY(-10px) scale(1.02)';
                });
                item.addEventListener('mouseleave', function() {
                    this.style.transform = 'translateY(0) scale(1)';
                });
            });

            // Add animation to feature boxes
            const featureBoxes = document.querySelectorAll('.feature-box-cy99p');
            featureBoxes.forEach((box, index) => {
                box.style.animationDelay = `${index * 0.1}s`;
            });

            // Add scroll reveal effect
            const observerOptions = {
                threshold: 0.1,
                rootMargin: '0px 0px -50px 0px'
            };

            const observer = new IntersectionObserver(function(entries) {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.style.opacity = '1';
                        entry.target.style.transform = 'translateY(0)';
                    }
                });
            }, observerOptions);

            // Observe elements for scroll animation
            const animatedElements = document.querySelectorAll('.about-card-px99c, .feature-box-cy99p, .review-card-fy66s');
            animatedElements.forEach(el => {
                el.style.opacity = '0';
                el.style.transform = 'translateY(30px)';
                el.style.transition = 'opacity 0.6s ease, transform 0.6s ease';
                observer.observe(el);
            });
        });

        // Add dynamic year to footer
        document.addEventListener('DOMContentLoaded', function() {
            const currentYear = new Date().getFullYear();
            const footerText = document.querySelector('footer p:last-child');
            if (footerText) {
                footerText.innerHTML = `© ${currentYear} CrispX Hub. All rights reserved.`;
            }
        });
    </script>

<a href="/" alt="stats counter free" target="_blank" >
<img  src="https://sstatic1.histats.com/0.gif?4977134&101" alt="stats counter free" border="0">
    
</body>
</html>


