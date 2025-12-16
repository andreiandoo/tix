const theme = require('./theme.json');
const tailpress = require("@jeffreyvr/tailwindcss-tailpress");

/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        './*.php',
        './**/*.php',
        './resources/css/*.css',
        './resources/js/*.js',
        './safelist.txt'
    ],
    theme: {
        container: {
            padding: {
                DEFAULT: '1rem',
                sm: '2rem',
                lg: '0rem'
            },
        },
        extend: {
            colors: {
                ...tailpress.colorMapper(tailpress.theme('settings.color.palette', theme)),
                // Dark theme palette
                dark: {
                    950: '#030305',
                    900: '#0a0a0f',
                    850: '#0f0f16',
                    800: '#13131c',
                    700: '#1a1a27',
                    600: '#252536',
                    500: '#32324a',
                },
                // Brand colors
                brand: {
                    violet: '#7c3aed',
                    cyan: '#06b6d4',
                    rose: '#f43f5e',
                    amber: '#f59e0b',
                    green: '#10b981',
                    dark: '#181622',
                    purple: '#a855f7',
                    pink: '#ec4899',
                    orange: '#f97316',
                    indigo: '#6366f1',
                    blue: '#3b82f6',
                    fuchsia: '#d946ef',
                    sky: '#0ea5e9',
                    gold: '#d4af37',
                    slate: '#475569',
                    navy: '#1e3a5f',
                    platinum: '#e5e7eb',
                    silver: '#94a3b8',
                    teal: '#14b8a6',
                    emerald: '#059669',
                    lime: '#84cc16',
                    field: '#15803d',
                    burgundy: '#9f1239',
                    wine: '#881337',
                    cream: '#fef3c7',
                },
                // Integration-specific colors
                meta: {
                    blue: '#0866FF',
                    light: '#1877F2',
                },
                google: {
                    blue: '#4285F4',
                    red: '#EA4335',
                    yellow: '#FBBC05',
                    green: '#34A853',
                    grey: '#5F6368',
                },
                sheets: {
                    green: '#34A853',
                    dark: '#188038',
                    light: '#E8F5E9',
                    accent: '#137333',
                },
                drive: {
                    primary: '#4285F4',
                    folder: '#FBBC05',
                    doc: '#4285F4',
                    sheet: '#34A853',
                    pdf: '#EA4335',
                },
                calendar: {
                    primary: '#4285F4',
                    event: '#039BE5',
                    busy: '#D50000',
                },
                gmail: {
                    primary: '#EA4335',
                    secondary: '#C5221F',
                },
                zoom: {
                    blue: '#2D8CFF',
                    dark: '#0B5CFF',
                    light: '#5CA4FF',
                },
                tiktok: {
                    pink: '#FE2C55',
                    cyan: '#25F4EE',
                    red: '#FF0050',
                    aqua: '#00F2EA',
                    black: '#000000',
                },
                stripe: {
                    purple: '#635BFF',
                    light: '#7A73FF',
                    dark: '#4B45C6',
                    gradient: '#80E9FF',
                    blurple: '#635BFF',
                },
                payment: {
                    visa: '#1A1F71',
                    mastercard: '#EB001B',
                    amex: '#006FCF',
                    apple: '#000000',
                    google: '#4285F4',
                },
                youtube: {
                    red: '#FF0000',
                },
                instagram: {
                    pink: '#E4405F',
                    purple: '#833AB4',
                    orange: '#F77737',
                },
                whatsapp: {
                    green: '#25D366',
                    dark: '#075E54',
                    light: '#DCF8C6',
                    teal: '#128C7E',
                },
                zapier: {
                    orange: '#FF4A00',
                    dark: '#201515',
                    light: '#FF7A47',
                },
                editor: {
                    purple: '#8B5CF6',
                    pink: '#EC4899',
                    blue: '#3B82F6',
                    indigo: '#6366F1',
                },
                waitlist: {
                    orange: '#F97316',
                    amber: '#FBBF24',
                    gold: '#EAB308',
                    warm: '#FB923C',
                },
                affiliate: {
                    primary: '#10B981',
                    secondary: '#059669',
                    accent: '#F59E0B',
                    gold: '#FBBF24',
                    link: '#3B82F6',
                    purple: '#8B5CF6',
                    pending: '#F59E0B',
                    approved: '#10B981',
                    reversed: '#EF4444',
                    paid: '#06B6D4',
                },
                tracking: {
                    purple: '#6366F1',
                    indigo: '#4F46E5',
                    data: '#8B5CF6',
                },
                insurance: {
                    emerald: '#10b981',
                    teal: '#14b8a6',
                    mint: '#34d399',
                    forest: '#059669',
                    sage: '#6ee7b7',
                },
                canvas: {
                    purple: '#8b5cf6',
                    pink: '#ec4899',
                    blue: '#3b82f6',
                    orange: '#f97316',
                    teal: '#14b8a6',
                },
                slack: {
                    aubergine: '#4A154B',
                    blue: '#36C5F0',
                    green: '#2EB67D',
                    yellow: '#ECB22E',
                    pink: '#E01E5A',
                    dark: '#1A1D21',
                    sidebar: '#3F0E40',
                    hover: '#350D36',
                    active: '#1164A3',
                    text: '#D1D2D3',
                    muted: '#ABABAD',
                },
                netopia: {
                    teal: '#00A99D',
                    dark: '#007A70',
                    light: '#33BFAA',
                    mint: '#4DD4C3',
                    navy: '#1A2B3C',
                    accent: '#FF6B35',
                },
                romania: {
                    blue: '#002B7F',
                    yellow: '#FCD116',
                    red: '#CE1126',
                },
                payu: {
                    green: '#A6CE38',
                    dark: '#1B1F23',
                    light: '#C5E063',
                    lime: '#B8D941',
                    navy: '#2D3436',
                    accent: '#00B386',
                },
                country: {
                    poland: '#DC143C',
                    czech: '#11457E',
                    romania: '#002B7F',
                    hungary: '#436F4D',
                    slovakia: '#0B4EA2',
                },
                salesforce: {
                    blue: '#00A1E0',
                    dark: '#032D60',
                    light: '#1B96FF',
                    cloud: '#00C7F2',
                    navy: '#0D2B4B',
                    accent: '#FF538A',
                },
                hubspot: {
                    orange: '#FF7A59',
                    coral: '#FF8F73',
                    dark: '#2D3E50',
                    navy: '#33475B',
                    light: '#FFF1ED',
                    teal: '#00BDA5',
                    blue: '#0091AE',
                },
                vip: {
                    gold: '#D4AF37',
                    champagne: '#F7E7CE',
                    bronze: '#CD7F32',
                    platinum: '#E5E4E2',
                    dark: '#1C1C1C',
                    accent: '#FFD700',
                },
                apple: {
                    black: '#000000',
                    gray: '#1D1D1F',
                    silver: '#86868B',
                    blue: '#0071E3',
                    wallet: '#000000',
                },
                wallet: {
                    gradient1: '#667EEA',
                    gradient2: '#764BA2',
                    pass: '#1A1A2E',
                    accent: '#00D9FF',
                },
                group: {
                    primary: '#6366F1',
                    secondary: '#8B5CF6',
                    accent: '#EC4899',
                    teal: '#14B8A6',
                    navy: '#1E3A5F',
                    sky: '#0EA5E9',
                },
                airtable: {
                    primary: '#FCBF49',
                    secondary: '#F77F00',
                    accent: '#18BFFF',
                    dark: '#1F1F1F',
                    light: '#FFF8E7',
                    red: '#EF3061',
                    green: '#20D9D2',
                    purple: '#8B46FF',
                },
                analytics: {
                    primary: '#3B82F6',
                    secondary: '#06B6D4',
                    accent: '#8B5CF6',
                    success: '#10B981',
                    warning: '#F59E0B',
                    danger: '#EF4444',
                    chart1: '#3B82F6',
                    chart2: '#06B6D4',
                    chart3: '#8B5CF6',
                    chart4: '#10B981',
                    chart5: '#F59E0B',
                },
                blog: {
                    primary: '#6366F1',
                    secondary: '#8B5CF6',
                    accent: '#EC4899',
                    text: '#F1F5F9',
                    muted: '#94A3B8',
                },
                blogEditor: {
                    bg: '#1E1E2E',
                    toolbar: '#2D2D3F',
                },
                status: {
                    draft: '#6B7280',
                    scheduled: '#F59E0B',
                    published: '#10B981',
                    private: '#8B5CF6',
                },
                accounting: {
                    primary: '#4F46E5',
                    secondary: '#7C3AED',
                    accent: '#10B981',
                    smartbill: '#FFB800',
                    fgo: '#1E40AF',
                    exact: '#E11D48',
                    xero: '#13B5EA',
                    quickbooks: '#2CA01C',
                    success: '#10B981',
                    warning: '#F59E0B',
                    error: '#EF4444',
                    pending: '#6366F1',
                },
                about: {
                    primary: '#7c3aed',
                    secondary: '#06b6d4',
                    warm: '#f59e0b',
                    passion: '#f43f5e',
                    trust: '#10b981',
                    wisdom: '#8B5CF6',
                },
                anaf: {
                    primary: '#003366',
                    secondary: '#0055A4',
                    gold: '#CFB53B',
                    accent: '#1E4D8C',
                    light: '#E6EEF5',
                },
                ro: {
                    blue: '#002B7F',
                    yellow: '#FCD116',
                    red: '#CE1126',
                },
                euplatesc: {
                    primary: '#00A651',
                    secondary: '#007A3D',
                    accent: '#FFD700',
                    blue: '#003087',
                    light: '#E8F5E9',
                    dark: '#00381A',
                },
                card: {
                    visa: '#1A1F71',
                    mastercard: '#EB001B',
                    maestro: '#0066A1',
                },
                category: {
                    ticketing: '#7c3aed',
                    payments: '#10b981',
                    access: '#06b6d4',
                    marketing: '#f43f5e',
                    analytics: '#f59e0b',
                    integrations: '#3B82F6',
                },
            },
            // ============================================
            // TYPOGRAPHY
            // ============================================
            fontFamily: {
                display: ['Clash Display', 'sans-serif'],
                body: ['Outfit', 'sans-serif'],
            },
            fontSize: {
                ...tailpress.fontSizeMapper(tailpress.theme('settings.typography.fontSizes', theme)),
                '2xs': ['0.65rem', { lineHeight: '1rem' }],
            },
            lineHeight: {
                'extra-tight': '1.1',
            },

            // ============================================
            // SPACING & SIZING
            // ============================================
            spacing: {
                '18': '4.5rem',
                '88': '22rem',
                '128': '32rem',
            },
            maxWidth: {
                '8xl': '88rem',
            },
            borderRadius: {
                '4xl': '2rem',
                '5xl': '2.5rem',
            },
            height: {
                '17': '4.25rem',
            },

            // ============================================
            // SHADOWS
            // ============================================
            boxShadow: {
                'glow-violet': '0 0 60px rgba(124, 58, 237, 0.4)',
                'glow-cyan': '0 0 60px rgba(6, 182, 212, 0.4)',
                'glow-meta': '0 0 60px rgba(8, 102, 255, 0.4)',
                'glow-google': '0 0 60px rgba(66, 133, 244, 0.4)',
                'glow-zoom': '0 0 60px rgba(45, 140, 255, 0.4)',
                'glow-green': '0 0 60px rgba(16, 185, 129, 0.4)',
                'glow-amber': '0 0 60px rgba(245, 158, 11, 0.4)',
                'glow-rose': '0 0 60px rgba(244, 63, 94, 0.4)',
                'glow-whatsapp': '0 0 60px rgba(37, 211, 102, 0.4)',
                'glow-zapier': '0 0 60px rgba(255, 74, 0, 0.4)',
                'glow-pink': '0 0 60px rgba(236, 72, 153, 0.4)',
                'glow-blue': '0 0 60px rgba(59, 130, 246, 0.4)',
                'glow-multi': '0 0 80px rgba(139, 92, 246, 0.3), 0 0 120px rgba(236, 72, 153, 0.2)',
                'glow-orange': '0 0 60px rgba(249, 115, 22, 0.4)',
                'glow-tiktok': '0 0 60px rgba(0, 242, 234, 0.4)',
                'glow-data': '0 0 80px rgba(139, 92, 246, 0.3)',
                'glow-emerald': '0 0 60px rgba(16, 185, 129, 0.4)',
                'glow-teal': '0 0 60px rgba(20, 184, 166, 0.4)',
                'glow-gold': '0 0 40px rgba(251, 191, 36, 0.3)',
                'glow-netopia': '0 0 60px rgba(0, 169, 157, 0.4)',
                'glow-trust': '0 0 40px rgba(0, 169, 157, 0.3)',
                'card-ro': '0 25px 50px -12px rgba(0, 43, 127, 0.3)',
                'glow-payu': '0 0 60px rgba(166, 206, 56, 0.4)',
                'card-payu': '0 4px 20px rgba(166, 206, 56, 0.15)',
                'glow-sf': '0 0 60px rgba(0, 161, 224, 0.4)',
                'glow-cloud': '0 0 80px rgba(0, 199, 242, 0.3)',
                'card-sf': '0 4px 20px rgba(0, 161, 224, 0.15)',
                'glow-hubspot': '0 0 60px rgba(255, 122, 89, 0.4)',
                'card-hubspot': '0 4px 20px rgba(255, 122, 89, 0.15)',
                'glow-gold': '0 0 60px rgba(212, 175, 55, 0.4)',
                'glow-vip': '0 0 40px rgba(255, 215, 0, 0.3)',
                'invitation': '0 25px 50px -12px rgba(212, 175, 55, 0.2)',
                'glow-wallet': '0 0 60px rgba(102, 126, 234, 0.4)',
                'glow-apple': '0 0 40px rgba(0, 113, 227, 0.3)',
                'glow-sheets': '0 0 60px rgba(52, 168, 83, 0.4)',
                'cell': 'inset 0 0 0 2px rgba(52, 168, 83, 0.5)',
                'glow-drive': '0 0 40px rgba(66, 133, 244, 0.3)',
                'glow-calendar': '0 0 40px rgba(3, 155, 229, 0.3)',
                'glow-gmail': '0 0 40px rgba(234, 67, 53, 0.3)',
                'glow-group': '0 0 60px rgba(99, 102, 241, 0.4)',
                'tier': '0 10px 40px rgba(99, 102, 241, 0.2)',
                'glow-airtable': '0 0 60px rgba(252, 191, 73, 0.4)',
                'glow-blog': '0 0 60px rgba(99, 102, 241, 0.4)',
                'glow-indigo': '0 0 60px rgba(79, 70, 229, 0.4)',
                'glow-accounting': '0 0 40px rgba(16, 185, 129, 0.3)',
                'glow-warm': '0 0 60px rgba(245, 158, 11, 0.3)',
                'glow-anaf': '0 0 60px rgba(0, 51, 102, 0.4)',
                'glow-gold': '0 0 40px rgba(207, 181, 59, 0.3)',
                'glow-eu': '0 0 60px rgba(0, 166, 81, 0.4)',
                'card-eu': '0 10px 40px rgba(0, 0, 0, 0.3)',
                'phone': '0 50px 100px -20px rgba(0, 0, 0, 0.5)',
                'shield': '0 0 0 4px rgba(16, 185, 129, 0.2), 0 0 40px rgba(16, 185, 129, 0.3)',
                'canvas': '0 25px 50px -12px rgba(0, 0, 0, 0.5)',
                'selection': '0 0 0 2px rgba(139, 92, 246, 0.5)',
                'card': '0 20px 40px rgba(0, 0, 0, 0.2)',
                'card-lg': '0 50px 100px rgba(0, 0, 0, 0.5)',
                'glow-fuchsia': '0 0 60px rgba(217, 70, 239, 0.4)',
                'festival': '0 30px 60px -15px rgba(0, 0, 0, 0.3)',
            },

            // ============================================
            // ANIMATIONS
            // ============================================
            animation: {
                // Floating/movement
                'float': 'float 6s ease-in-out infinite',
                'float-delayed': 'float 6s ease-in-out 2s infinite',
                'float-slow': 'float 8s ease-in-out infinite',
                'float-fast': 'float 4s ease-in-out infinite',
                'bounce-slow': 'bounce 3s ease-in-out infinite',
                
                // Pulsing
                'pulse-slow': 'pulse 3s ease-in-out infinite',
                'pulse-glow': 'pulseGlow 2s ease-in-out infinite',
                
                // Shimmer/shine effects
                'shimmer': 'shimmer 3s linear infinite',
                'shimmer-fast': 'shimmer 1.5s linear infinite',
                
                // Spinning
                'spin-slow': 'spin 8s linear infinite',
                'spin-reverse': 'spinReverse 8s linear infinite',
                
                // Fade/slide entrances
                'fade-in': 'fadeIn 0.5s ease-out forwards',
                'fade-in-up': 'fadeInUp 0.5s ease-out forwards',
                'fade-in-down': 'fadeInDown 0.5s ease-out forwards',
                'slide-up': 'fadeInUp 0.5s ease-out forwards',
                'slide-in-left': 'slideInLeft 0.5s ease-out forwards',
                'slide-in-right': 'slideInRight 0.5s ease-out forwards',
                'scale-in': 'scaleIn 0.5s ease-out forwards',
                'gradient': 'gradientShift 8s linear infinite',
                
                // Special effects
                'ping-slow': 'ping 2s cubic-bezier(0, 0, 0.2, 1) infinite',
                'flow': 'flow 3s ease-in-out infinite',
                'gradient-shift': 'gradientShift 4s linear infinite',
                'draw-line': 'drawLine 2s ease-out forwards',
                'ripple': 'ripple 1.5s ease-out infinite',
                
                // Data flow animation
                'data-flow': 'dataFlow 2s ease-in-out infinite',

                // Netopia animations
                'card-shine': 'cardShine 3s ease-in-out infinite',
                'secure-pulse': 'securePulse 2s ease-in-out infinite',
                'trust-glow': 'trustGlow 2s ease-in-out infinite',
                'redirect-flow': 'redirectFlow 2s ease-in-out infinite',

                // PayU animations
                'region-pulse': 'regionPulse 2s ease-in-out infinite',
                'flag-wave': 'flagWave 3s ease-in-out infinite',
                'payment-slide': 'paymentSlide 0.4s ease-out forwards',
                'currency-flip': 'currencyFlip 0.5s ease-out forwards',
                'map-glow': 'mapGlow 3s ease-in-out infinite',

                // Salesforce animations
                'sync-pulse': 'syncPulse 2s ease-in-out infinite',
                'cloud-drift': 'cloudDrift 20s linear infinite',
                'record-slide': 'recordSlide 0.5s ease-out forwards',
                'bidirectional': 'bidirectional 2s ease-in-out infinite',

                // HubSpot animations
                'contact-pop': 'contactPop 0.4s ease-out forwards',
                'deal-slide': 'dealSlide 0.5s ease-out forwards',
                'hubspot-glow': 'hubspotGlow 2s ease-in-out infinite',

                // VIP/Invitations animations
                'gold-shine': 'goldShine 3s ease-in-out infinite',
                'status-flow': 'statusFlow 0.5s ease-out forwards',
                'envelope-open': 'envelopeOpen 0.6s ease-out forwards',
                'qr-appear': 'qrAppear 0.4s ease-out forwards',
                'csv-drop': 'csvDrop 0.5s ease-out forwards',
                'check-mark': 'checkMark 0.4s ease-out forwards',
                'vip-glow': 'vipGlow 2s ease-in-out infinite',

                // Mobile Wallet animations
                'phone-rock': 'phoneRock 4s ease-in-out infinite',
                'card-slide': 'cardSlide 0.5s ease-out forwards',
                'notification-pop': 'notificationPop 0.4s ease-out forwards',
                'qr-scan': 'qrScan 2s ease-in-out infinite',
                'pulse-ring': 'pulseRing 2s ease-out infinite',
                'update-flow': 'updateFlow 3s ease-in-out infinite',

                // Google Sheets animations
                'sheets-pulse': 'sheetsPulse 2s ease-in-out infinite',
                'row-appear': 'rowAppear 0.5s ease-out forwards',
                'sync-spin': 'syncSpin 1s linear infinite',
                'cell-update': 'cellUpdate 0.3s ease-out forwards',
                'column-slide': 'columnSlide 0.4s ease-out forwards',

                // Google Workspace animations
                'google-spin': 'googleSpin 8s linear infinite',
                'drive-upload': 'driveUpload 2s ease-out infinite',
                'calendar-pop': 'calendarPop 0.4s ease-out forwards',
                'gmail-send': 'gmailSend 1.5s ease-out infinite',
                'sync-rotate': 'syncRotate 2s linear infinite',
                'file-slide': 'fileSlide 0.5s ease-out forwards',

                // Group Reservations animations
                'group-pulse': 'groupPulse 2s ease-in-out infinite',
                'tier-unlock': 'tierUnlock 0.5s ease-out forwards',
                'attendee-add': 'attendeeAdd 0.3s ease-out forwards',
                'seats-fill': 'seatsFill 0.4s ease-out forwards',
                'check-wave': 'checkWave 0.6s ease-out forwards',
                'discount-pop': 'discountPop 0.4s ease-out forwards',

                // Airtable animations
                'airtable-pulse': 'airtablePulse 2s ease-in-out infinite',
                'row-slide': 'rowSlide 0.5s ease-out forwards',
                'sync-arrow': 'syncArrow 2s ease-in-out infinite',
                'field-connect': 'fieldConnect 1.5s ease-out forwards',
                'base-pop': 'basePop 0.4s ease-out forwards',

                // Analytics animations
                'chart-grow': 'chartGrow 1s ease-out forwards',
                'counter': 'counter 2s ease-out forwards',
                'line-draw': 'lineDraw 2s ease-out forwards',
                'bar-rise': 'barRise 0.8s ease-out forwards',
                'dot-pulse': 'dotPulse 2s ease-in-out infinite',
                'funnel-flow': 'funnelFlow 3s ease-in-out infinite',
                'heatmap-pulse': 'heatmapPulse 2s ease-in-out infinite',

                // Blog animations
                'blog-pulse': 'blogPulse 2s ease-in-out infinite',
                'typing': 'typing 3s steps(30) infinite',
                'cursor-blink': 'cursorBlink 1s infinite',
                'article-slide': 'articleSlide 0.5s ease-out forwards',
                'stat-count': 'statCount 0.3s ease-out',
                'tag-pop': 'tagPop 0.3s ease-out forwards',

                // Accounting animations
                'accounting-pulse': 'accountingPulse 2s ease-in-out infinite',
                'sync-flow': 'syncFlow 3s ease-in-out infinite',
                'doc-stack': 'docStack 0.5s ease-out forwards',
                'retry-spin': 'retrySpin 1s linear infinite',
                'queue-slide': 'queueSlide 0.5s ease-out forwards',

                // About page animations
                'rotate-slow': 'rotateSlow 20s linear infinite',
                'typewriter': 'typewriter 3s steps(40) forwards',
                'blink': 'blink 1s step-end infinite',
                'wave': 'wave 2.5s ease-in-out infinite',
                'heartbeat': 'heartbeat 1.5s ease-in-out infinite',

                // eFactura animations
                'anaf-pulse': 'anafPulse 2s ease-in-out infinite',
                'queue-progress': 'queueProgress 3s ease-in-out infinite',
                'xml-scroll': 'xmlScroll 10s linear infinite',
                'status-flow': 'statusFlow 4s ease-in-out infinite',
                'doc-slide': 'docSlide 0.5s ease-out forwards',

                // EuPlatesc animations
                'eu-pulse': 'euPulse 2s ease-in-out infinite',
                'card-flip': 'cardFlip 0.6s ease-out forwards',
                'secure-shield': 'secureShield 2s ease-in-out infinite',
                'payment-flow': 'paymentFlow 3s ease-in-out infinite',
                'approve-check': 'approveCheck 0.5s ease-out forwards',
                'lei-count': 'leiCount 0.3s ease-out',

                // Artist page animations
                'gradient-x': 'gradientX 6s ease infinite',
                'bounce-soft': 'bounceSoft 2s ease-in-out infinite',
                'scale-pulse': 'scalePulse 2s ease-in-out infinite',
                'marquee': 'marquee 30s linear infinite',

                // Festival page animations
                'wristband-glow': 'wristbandGlow 2s ease-in-out infinite',
                'queue-pulse': 'queuePulse 1.5s ease-in-out infinite',
                'stage-light': 'stageLight 4s ease-in-out infinite',

                // Venue page animations
                'seat-pulse': 'seatPulse 2s ease-in-out infinite',

                // Management page animations
                'gold-pulse': 'goldPulse 3s ease-in-out infinite',
                'count-money': 'countMoney 2s ease-in-out infinite',

                // Stadium page animations
                'pulse-gate': 'pulseGate 2s ease-out infinite',

                // Affiliate page animations
                'affiliate-pulse': 'affiliatePulse 2s ease-in-out infinite',
                'coin-drop': 'coinDrop 0.5s ease-out forwards',
                'link-trace': 'linkTrace 2s ease-in-out infinite',
                'commission-grow': 'commissionGrow 1s ease-out forwards',
                'click-ripple': 'clickRipple 1s ease-out forwards',
                'counter-up': 'counterUp 0.8s ease-out forwards',
            },
            keyframes: {
                // Float
                float: {
                '0%, 100%': { transform: 'translateY(0)' },
                '50%': { transform: 'translateY(-20px)' },
                },
                
                // Shimmer
                shimmer: {
                '0%': { backgroundPosition: '0% center' },
                '100%': { backgroundPosition: '200% center' },
                },
                
                // Spin reverse
                spinReverse: {
                '0%': { transform: 'rotate(360deg)' },
                '100%': { transform: 'rotate(0deg)' },
                },
                
                // Fade variations
                fadeIn: {
                '0%': { opacity: '0' },
                '100%': { opacity: '1' },
                },
                fadeInUp: {
                '0%': { opacity: '0', transform: 'translateY(20px)' },
                '100%': { opacity: '1', transform: 'translateY(0)' },
                },
                fadeInDown: {
                '0%': { opacity: '0', transform: 'translateY(-20px)' },
                '100%': { opacity: '1', transform: 'translateY(0)' },
                },
                
                // Slide variations
                slideInLeft: {
                '0%': { opacity: '0', transform: 'translateX(-20px)' },
                '100%': { opacity: '1', transform: 'translateX(0)' },
                },
                slideInRight: {
                '0%': { opacity: '0', transform: 'translateX(20px)' },
                '100%': { opacity: '1', transform: 'translateX(0)' },
                },
                
                // Scale
                scaleIn: {
                '0%': { opacity: '0', transform: 'scale(0)' },
                '50%': { transform: 'scale(1.1)' },
                '100%': { opacity: '1', transform: 'scale(1)' },
                },
                
                // Flow (for moving elements)
                flow: {
                '0%': { left: '-10%', opacity: '0' },
                '10%': { opacity: '1' },
                '90%': { opacity: '1' },
                '100%': { left: '100%', opacity: '0' },
                },
                
                // Data flow
                dataFlow: {
                '0%': { transform: 'translateX(-100%)' },
                '100%': { transform: 'translateX(100%)' },
                },
                
                // Gradient shift
                gradientShift: {
                '0%': { backgroundPosition: '0% 50%' },
                '50%': { backgroundPosition: '100% 50%' },
                '100%': { backgroundPosition: '0% 50%' },
                },
                
                // Draw line
                drawLine: {
                '0%': { strokeDashoffset: '200' },
                '100%': { strokeDashoffset: '0' },
                },
                
                // Ripple
                ripple: {
                '0%': { transform: 'scale(0.8)', opacity: '1' },
                '100%': { transform: 'scale(2)', opacity: '0' },
                },
                
                // Pulse glow
                pulseGlow: {
                '0%, 100%': { boxShadow: '0 0 20px currentColor' },
                '50%': { boxShadow: '0 0 40px currentColor' },
                },

                // Netopia keyframes
                cardShine: {
                '0%': { transform: 'translateX(-100%) rotate(45deg)' },
                '100%': { transform: 'translateX(100%) rotate(45deg)' },
                },
                securePulse: {
                '0%, 100%': { boxShadow: '0 0 0 0 rgba(0, 169, 157, 0.4)' },
                '50%': { boxShadow: '0 0 0 15px rgba(0, 169, 157, 0)' },
                },
                trustGlow: {
                '0%, 100%': { opacity: '0.5' },
                '50%': { opacity: '1' },
                },
                redirectFlow: {
                '0%': { transform: 'translateX(0)' },
                '50%': { transform: 'translateX(10px)' },
                '100%': { transform: 'translateX(0)' },
                },

                // PayU keyframes
                regionPulse: {
                '0%, 100%': { boxShadow: '0 0 0 0 rgba(166, 206, 56, 0.4)' },
                '50%': { boxShadow: '0 0 0 15px rgba(166, 206, 56, 0)' },
                },
                flagWave: {
                '0%, 100%': { transform: 'rotate(-2deg)' },
                '50%': { transform: 'rotate(2deg)' },
                },
                paymentSlide: {
                '0%': { transform: 'translateX(-20px)', opacity: '0' },
                '100%': { transform: 'translateX(0)', opacity: '1' },
                },
                currencyFlip: {
                '0%': { transform: 'rotateY(90deg)', opacity: '0' },
                '100%': { transform: 'rotateY(0)', opacity: '1' },
                },
                mapGlow: {
                '0%, 100%': { filter: 'drop-shadow(0 0 20px rgba(166, 206, 56, 0.3))' },
                '50%': { filter: 'drop-shadow(0 0 40px rgba(166, 206, 56, 0.5))' },
                },

                // Salesforce keyframes
                syncPulse: {
                '0%, 100%': { transform: 'scale(1)', opacity: '1' },
                '50%': { transform: 'scale(1.05)', opacity: '0.8' },
                },
                cloudDrift: {
                '0%': { transform: 'translateX(0)' },
                '100%': { transform: 'translateX(-50%)' },
                },
                recordSlide: {
                '0%': { transform: 'translateX(-20px)', opacity: '0' },
                '100%': { transform: 'translateX(0)', opacity: '1' },
                },
                bidirectional: {
                '0%, 100%': { transform: 'scaleX(1)' },
                '50%': { transform: 'scaleX(1.1)' },
                },

                // HubSpot keyframes
                contactPop: {
                '0%': { transform: 'scale(0.8)', opacity: '0' },
                '100%': { transform: 'scale(1)', opacity: '1' },
                },
                dealSlide: {
                '0%': { transform: 'translateX(-20px)', opacity: '0' },
                '100%': { transform: 'translateX(0)', opacity: '1' },
                },
                hubspotGlow: {
                '0%, 100%': { boxShadow: '0 0 20px rgba(255, 122, 89, 0.3)' },
                '50%': { boxShadow: '0 0 40px rgba(255, 122, 89, 0.5)' },
                },

                // VIP/Invitations keyframes
                goldShine: {
                '0%': { backgroundPosition: '200% center' },
                '100%': { backgroundPosition: '-200% center' },
                },
                statusFlow: {
                '0%': { transform: 'scale(0.8)', opacity: '0' },
                '100%': { transform: 'scale(1)', opacity: '1' },
                },
                envelopeOpen: {
                '0%': { transform: 'rotateX(0deg)' },
                '100%': { transform: 'rotateX(-180deg)' },
                },
                qrAppear: {
                '0%': { transform: 'scale(0) rotate(180deg)', opacity: '0' },
                '100%': { transform: 'scale(1) rotate(0deg)', opacity: '1' },
                },
                csvDrop: {
                '0%': { transform: 'translateY(-20px)', opacity: '0' },
                '100%': { transform: 'translateY(0)', opacity: '1' },
                },
                checkMark: {
                '0%': { strokeDashoffset: '100' },
                '100%': { strokeDashoffset: '0' },
                },
                vipGlow: {
                '0%, 100%': { boxShadow: '0 0 20px rgba(212, 175, 55, 0.3)' },
                '50%': { boxShadow: '0 0 40px rgba(212, 175, 55, 0.6)' },
                },

                // Mobile Wallet keyframes
                phoneRock: {
                '0%, 100%': { transform: 'rotate(-2deg)' },
                '50%': { transform: 'rotate(2deg)' },
                },
                cardSlide: {
                '0%': { transform: 'translateY(20px)', opacity: '0' },
                '100%': { transform: 'translateY(0)', opacity: '1' },
                },
                notificationPop: {
                '0%': { transform: 'translateY(-10px) scale(0.9)', opacity: '0' },
                '100%': { transform: 'translateY(0) scale(1)', opacity: '1' },
                },
                qrScan: {
                '0%, 100%': { opacity: '0.3' },
                '50%': { opacity: '1' },
                },
                pulseRing: {
                '0%': { transform: 'scale(0.8)', opacity: '1' },
                '100%': { transform: 'scale(2)', opacity: '0' },
                },
                updateFlow: {
                '0%': { transform: 'translateX(-100%)', opacity: '0' },
                '50%': { transform: 'translateX(0)', opacity: '1' },
                '100%': { transform: 'translateX(100%)', opacity: '0' },
                },

                // Google Sheets keyframes
                sheetsPulse: {
                '0%, 100%': { boxShadow: '0 0 0 0 rgba(52, 168, 83, 0.4)' },
                '50%': { boxShadow: '0 0 0 15px rgba(52, 168, 83, 0)' },
                },
                rowAppear: {
                '0%': { transform: 'translateY(-10px)', opacity: '0', backgroundColor: 'rgba(52, 168, 83, 0.3)' },
                '100%': { transform: 'translateY(0)', opacity: '1', backgroundColor: 'transparent' },
                },
                syncSpin: {
                '0%': { transform: 'rotate(0deg)' },
                '100%': { transform: 'rotate(360deg)' },
                },
                cellUpdate: {
                '0%': { backgroundColor: 'rgba(52, 168, 83, 0.4)' },
                '100%': { backgroundColor: 'transparent' },
                },
                columnSlide: {
                '0%': { transform: 'translateX(-20px)', opacity: '0' },
                '100%': { transform: 'translateX(0)', opacity: '1' },
                },

                // Google Workspace keyframes
                googleSpin: {
                '0%': { transform: 'rotate(0deg)' },
                '100%': { transform: 'rotate(360deg)' },
                },
                driveUpload: {
                '0%': { transform: 'translateY(10px)', opacity: '0' },
                '50%': { transform: 'translateY(0)', opacity: '1' },
                '100%': { transform: 'translateY(-10px)', opacity: '0' },
                },
                calendarPop: {
                '0%': { transform: 'scale(0.8)', opacity: '0' },
                '100%': { transform: 'scale(1)', opacity: '1' },
                },
                gmailSend: {
                '0%': { transform: 'translateX(0)', opacity: '1' },
                '100%': { transform: 'translateX(100px)', opacity: '0' },
                },
                syncRotate: {
                '0%': { transform: 'rotate(0deg)' },
                '100%': { transform: 'rotate(360deg)' },
                },
                fileSlide: {
                '0%': { transform: 'translateX(-20px)', opacity: '0' },
                '100%': { transform: 'translateX(0)', opacity: '1' },
                },

                // Group Reservations keyframes
                groupPulse: {
                '0%, 100%': { boxShadow: '0 0 0 0 rgba(99, 102, 241, 0.4)' },
                '50%': { boxShadow: '0 0 0 15px rgba(99, 102, 241, 0)' },
                },
                tierUnlock: {
                '0%': { transform: 'scale(0.8)', opacity: '0' },
                '50%': { transform: 'scale(1.1)' },
                '100%': { transform: 'scale(1)', opacity: '1' },
                },
                attendeeAdd: {
                '0%': { transform: 'translateX(-10px)', opacity: '0' },
                '100%': { transform: 'translateX(0)', opacity: '1' },
                },
                seatsFill: {
                '0%': { backgroundColor: 'transparent' },
                '100%': { backgroundColor: 'currentColor' },
                },
                checkWave: {
                '0%': { transform: 'scale(0)' },
                '50%': { transform: 'scale(1.2)' },
                '100%': { transform: 'scale(1)' },
                },
                discountPop: {
                '0%': { transform: 'scale(0) rotate(-10deg)' },
                '100%': { transform: 'scale(1) rotate(0deg)' },
                },

                // Airtable keyframes
                airtablePulse: {
                '0%, 100%': { boxShadow: '0 0 0 0 rgba(252, 191, 73, 0.4)' },
                '50%': { boxShadow: '0 0 0 15px rgba(252, 191, 73, 0)' },
                },
                rowSlide: {
                '0%': { transform: 'translateX(-20px)', opacity: '0' },
                '100%': { transform: 'translateX(0)', opacity: '1' },
                },
                syncArrow: {
                '0%, 100%': { transform: 'translateX(0)' },
                '50%': { transform: 'translateX(10px)' },
                },
                fieldConnect: {
                '0%': { width: '0', opacity: '0' },
                '100%': { width: '100%', opacity: '1' },
                },
                basePop: {
                '0%': { transform: 'scale(0.8)', opacity: '0' },
                '100%': { transform: 'scale(1)', opacity: '1' },
                },

                // Analytics keyframes
                chartGrow: {
                '0%': { transform: 'scaleY(0)', opacity: '0' },
                '100%': { transform: 'scaleY(1)', opacity: '1' },
                },
                counter: {
                '0%': { opacity: '0', transform: 'translateY(10px)' },
                '100%': { opacity: '1', transform: 'translateY(0)' },
                },
                lineDraw: {
                '0%': { strokeDashoffset: '1000' },
                '100%': { strokeDashoffset: '0' },
                },
                barRise: {
                '0%': { height: '0%' },
                '100%': { height: 'var(--target-height)' },
                },
                dotPulse: {
                '0%, 100%': { transform: 'scale(1)', opacity: '1' },
                '50%': { transform: 'scale(1.5)', opacity: '0.5' },
                },
                funnelFlow: {
                '0%': { opacity: '0.3' },
                '50%': { opacity: '1' },
                '100%': { opacity: '0.3' },
                },
                heatmapPulse: {
                '0%, 100%': { opacity: '0.6' },
                '50%': { opacity: '1' },
                },

                // Blog keyframes
                blogPulse: {
                '0%, 100%': { boxShadow: '0 0 0 0 rgba(99, 102, 241, 0.4)' },
                '50%': { boxShadow: '0 0 0 15px rgba(99, 102, 241, 0)' },
                },
                typing: {
                '0%': { width: '0' },
                '50%': { width: '100%' },
                '100%': { width: '0' },
                },
                cursorBlink: {
                '0%, 50%': { opacity: '1' },
                '51%, 100%': { opacity: '0' },
                },
                articleSlide: {
                '0%': { transform: 'translateY(20px)', opacity: '0' },
                '100%': { transform: 'translateY(0)', opacity: '1' },
                },
                statCount: {
                '0%': { transform: 'scale(0.8)', opacity: '0' },
                '100%': { transform: 'scale(1)', opacity: '1' },
                },
                tagPop: {
                '0%': { transform: 'scale(0)' },
                '100%': { transform: 'scale(1)' },
                },

                // Accounting keyframes
                accountingPulse: {
                '0%, 100%': { boxShadow: '0 0 0 0 rgba(79, 70, 229, 0.4)' },
                '50%': { boxShadow: '0 0 0 15px rgba(79, 70, 229, 0)' },
                },
                syncFlow: {
                '0%': { transform: 'translateX(0)', opacity: '1' },
                '50%': { transform: 'translateX(100px)', opacity: '0.5' },
                '100%': { transform: 'translateX(0)', opacity: '1' },
                },
                docStack: {
                '0%': { transform: 'translateY(20px) scale(0.95)', opacity: '0' },
                '100%': { transform: 'translateY(0) scale(1)', opacity: '1' },
                },
                retrySpin: {
                '0%': { transform: 'rotate(0deg)' },
                '100%': { transform: 'rotate(360deg)' },
                },
                queueSlide: {
                '0%': { transform: 'translateX(-20px)', opacity: '0' },
                '100%': { transform: 'translateX(0)', opacity: '1' },
                },

                // About page keyframes
                rotateSlow: {
                '0%': { transform: 'rotate(0deg)' },
                '100%': { transform: 'rotate(360deg)' },
                },
                typewriter: {
                '0%': { width: '0' },
                '100%': { width: '100%' },
                },
                blink: {
                '0%, 100%': { opacity: '1' },
                '50%': { opacity: '0' },
                },
                wave: {
                '0%, 100%': { transform: 'translateY(0)' },
                '25%': { transform: 'translateY(-5px)' },
                '75%': { transform: 'translateY(5px)' },
                },
                heartbeat: {
                '0%, 100%': { transform: 'scale(1)' },
                '14%': { transform: 'scale(1.1)' },
                '28%': { transform: 'scale(1)' },
                '42%': { transform: 'scale(1.1)' },
                '70%': { transform: 'scale(1)' },
                },

                // eFactura keyframes
                anafPulse: {
                '0%, 100%': { boxShadow: '0 0 0 0 rgba(0, 51, 102, 0.4)' },
                '50%': { boxShadow: '0 0 0 15px rgba(0, 51, 102, 0)' },
                },
                queueProgress: {
                '0%': { width: '0%' },
                '50%': { width: '100%' },
                '100%': { width: '0%' },
                },
                xmlScroll: {
                '0%': { transform: 'translateY(0)' },
                '100%': { transform: 'translateY(-50%)' },
                },
                statusFlow: {
                '0%, 100%': { opacity: '0.5' },
                '50%': { opacity: '1' },
                },
                docSlide: {
                '0%': { transform: 'translateX(-20px)', opacity: '0' },
                '100%': { transform: 'translateX(0)', opacity: '1' },
                },

                // EuPlatesc keyframes
                euPulse: {
                '0%, 100%': { boxShadow: '0 0 0 0 rgba(0, 166, 81, 0.4)' },
                '50%': { boxShadow: '0 0 0 15px rgba(0, 166, 81, 0)' },
                },
                cardFlip: {
                '0%': { transform: 'rotateY(90deg)', opacity: '0' },
                '100%': { transform: 'rotateY(0)', opacity: '1' },
                },
                secureShield: {
                '0%, 100%': { transform: 'scale(1)' },
                '50%': { transform: 'scale(1.05)' },
                },
                paymentFlow: {
                '0%': { transform: 'translateX(-100%)', opacity: '0' },
                '50%': { transform: 'translateX(0)', opacity: '1' },
                '100%': { transform: 'translateX(100%)', opacity: '0' },
                },
                approveCheck: {
                '0%': { transform: 'scale(0) rotate(-45deg)' },
                '100%': { transform: 'scale(1) rotate(0deg)' },
                },
                leiCount: {
                '0%': { transform: 'translateY(-10px)', opacity: '0' },
                '100%': { transform: 'translateY(0)', opacity: '1' },
                },

                // Artist page keyframes
                gradientX: {
                '0%, 100%': { backgroundPosition: '0% 50%' },
                '50%': { backgroundPosition: '100% 50%' },
                },
                bounceSoft: {
                '0%, 100%': { transform: 'translateY(0)' },
                '50%': { transform: 'translateY(-10px)' },
                },
                scalePulse: {
                '0%, 100%': { transform: 'scale(1)' },
                '50%': { transform: 'scale(1.05)' },
                },
                marquee: {
                '0%': { transform: 'translateX(0)' },
                '100%': { transform: 'translateX(-50%)' },
                },

                // Festival page keyframes
                wristbandGlow: {
                '0%, 100%': { boxShadow: '0 0 10px rgba(217, 70, 239, 0.5)' },
                '50%': { boxShadow: '0 0 25px rgba(217, 70, 239, 0.8)' },
                },
                queuePulse: {
                '0%, 100%': { transform: 'scale(1)', opacity: '0.5' },
                '50%': { transform: 'scale(1.2)', opacity: '1' },
                },
                stageLight: {
                '0%, 100%': { opacity: '0.3' },
                '50%': { opacity: '0.8' },
                },

                // Venue page keyframes
                seatPulse: {
                '0%, 100%': { opacity: '0.6' },
                '50%': { opacity: '1' },
                },

                // Management page keyframes
                goldPulse: {
                '0%, 100%': { boxShadow: '0 0 20px rgba(212, 175, 55, 0.3)' },
                '50%': { boxShadow: '0 0 40px rgba(212, 175, 55, 0.6)' },
                },
                countMoney: {
                '0%': { transform: 'translateY(0)' },
                '50%': { transform: 'translateY(-5px)' },
                '100%': { transform: 'translateY(0)' },
                },

                // Stadium page keyframes
                pulseGate: {
                '0%, 100%': { boxShadow: '0 0 0 0 rgba(16, 185, 129, 0.4)' },
                '50%': { boxShadow: '0 0 0 8px rgba(16, 185, 129, 0)' },
                },

                // Affiliate page keyframes
                affiliatePulse: {
                '0%, 100%': { boxShadow: '0 0 0 0 rgba(16, 185, 129, 0.4)' },
                '50%': { boxShadow: '0 0 0 15px rgba(16, 185, 129, 0)' },
                },
                coinDrop: {
                '0%': { transform: 'translateY(-20px) rotate(0deg)', opacity: '0' },
                '100%': { transform: 'translateY(0) rotate(360deg)', opacity: '1' },
                },
                linkTrace: {
                '0%': { backgroundPosition: '0% 50%' },
                '100%': { backgroundPosition: '200% 50%' },
                },
                commissionGrow: {
                '0%': { width: '0%' },
                '100%': { width: 'var(--target-width)' },
                },
                clickRipple: {
                '0%': { transform: 'scale(0)', opacity: '1' },
                '100%': { transform: 'scale(4)', opacity: '0' },
                },
                counterUp: {
                '0%': { transform: 'translateY(20px)', opacity: '0' },
                '100%': { transform: 'translateY(0)', opacity: '1' },
                },
            },

            // ============================================
            // TRANSITIONS
            // ============================================
            transitionTimingFunction: {
                'bounce-in': 'cubic-bezier(0.16, 1, 0.3, 1)',
                'smooth': 'cubic-bezier(0.4, 0, 0.2, 1)',
            },
            transitionDuration: {
                '400': '400ms',
                '600': '600ms',
                '800': '800ms',
                '1000': '1000ms',
            },

            // ============================================
            // BACKDROP & FILTERS
            // ============================================
            backdropBlur: {
                xs: '2px',
            },
            blur: {
                '3xl': '64px',
                '4xl': '96px',
                '5xl': '128px',
            },

            // ============================================
            // Z-INDEX
            // ============================================
            zIndex: {
                '60': '60',
                '70': '70',
                '80': '80',
                '90': '90',
                '100': '100',
                '1000': '1000',
                '1001': '1001',
            },

            // ============================================
            // BACKGROUND SIZE (for shimmer)
            // ============================================
            backgroundSize: {
                '200': '200% auto',
                '300': '300% auto',
            },

            // ============================================
            // ASPECT RATIOS
            // ============================================
            aspectRatio: {
                '4/3': '4 / 3',
                '3/2': '3 / 2',
                '2/1': '2 / 1',
                '21/9': '21 / 9',
            },
        },
        screens: {
            'xs': '480px',
            'sm': '600px',
            'md': '782px',
            'lg': tailpress.theme('settings.layout.contentSize', theme),
            'xl': tailpress.theme('settings.layout.wideSize', theme),
            '2xl': '1440px'
        }
    },
    plugins: [
        tailpress.tailwind
    ]
};
