<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Post[]|\Cake\Collection\CollectionInterface $posts
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    
</nav>
<div class="posts index large-9 medium-8 columns content">
    <h3><?= __('Are you a Rockstar? (welcome to my blog....)') ?></h3>
   <?php foreach ($posts as $post): ?>
            <div class="post">
                <h3><?= $this->Html->link($post->title, ['action' => 'view', $post->id]) ?></h3>
                <div class="post-body">
                    <p><?= $post->body ?></p>
                </div>
                <div class="meta" style="font-size:12px;color: #666">
                    By <span style="color:#f00"><?= $post->user->name ?></span>,
                    At <?= h($post->created) ?>,
                    Edited at <?= h($post->modified) ?>
                </div>

                <hr>
            <?php endforeach; ?>

            
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
