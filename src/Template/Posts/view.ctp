<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Post $post
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Post'), ['action' => 'edit', $post->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Post'), ['action' => 'delete', $post->id], ['confirm' => __('Are you sure you want to delete # {0}?', $post->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Posts'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Comment'), ['controller' => 'Comments', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="posts view large-9 medium-8 columns content">
    <h3><?= h($post->title) ?></h3>
    
    <div class="row">
        <?= $this->Text->autoParagraph(h($post->body)); ?>

        <div class="meta" style="font-size:12px;color: #666">
                    By <span style="color:#f00"><?= $post->user->name ?></span>,
                    At <?= h($post->created) ?>,
                    Edited at <?= h($post->modified) ?>
        </div>


    </div>
    <div class="related">
        <h4>Comments</h4>
        <?php if (!empty($post->comments)): ?>
       
            <?php foreach ($post->comments as $comments): ?>
            
                <div class="comment">
                    <p><?= $comments->comment?><span style="font-size:12px;color:#666"> when <?= h($post->created) ?></span></p> 

                    
                </div>
                <hr>

            <?php endforeach; ?>
      
        <?php endif; ?>
    </div>
</div>
