<footer class="footer">
    <p>© <?= date('Y') ?> KostSaya - Sistem Booking Kost</p>
</footer>

<!-- JS -->
<script src="<?= base_url('assets/js/script.js'); ?>"></script>

<style>
    .footer{
        background:  #0d206a;
        color: #ffffff;
        text-align: center;
        padding: 20px;
        margin-top: 50px;
    }

    .footer p{
        font-size: 15px;
        letter-spacing: 0.5px;
    }

    /* RESPONSIVE */
    @media(max-width: 768px){

        .footer{
            padding: 18px 10px;
        }

        .footer p{
            font-size: 14px;
        }

    }
</style>

</body>
</html>
