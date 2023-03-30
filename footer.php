<div class="sidebar">         
    <?php if(is_active_sidebar('sidebar')) : ?>            
        <?php dynamic_sidebar('sidebar'); ?>         
        <?php endif; ?>      
    </div>      
    <div class="clr"></div>      
</div>
    
    <footer>
        <div class="container">   
            <p>&copy; Michelle Alzola</p>
        </div>
    </footer> 
    <?php wp_footer(); ?>     
</html> 