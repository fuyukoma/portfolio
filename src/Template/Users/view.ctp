<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit User'), ['action' => 'edit', $user->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete User'), ['action' => 'delete', $user->id], ['confirm' => __('Are you sure you want to delete # {0}?', $user->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Blogs'), ['controller' => 'Blogs', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Blog'), ['controller' => 'Blogs', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Works'), ['controller' => 'Works', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Work'), ['controller' => 'Works', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="users view large-10 medium-9 columns">
    <h2><?= h($user->id) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Username') ?></h6>
            <p><?= h($user->username) ?></p>
            <h6 class="subheader"><?= __('Password') ?></h6>
            <p><?= h($user->password) ?></p>
            <h6 class="subheader"><?= __('Role') ?></h6>
            <p><?= h($user->role) ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Id') ?></h6>
            <p><?= $this->Number->format($user->id) ?></p>
        </div>
        <div class="large-2 columns dates end">
            <h6 class="subheader"><?= __('Created') ?></h6>
            <p><?= h($user->created) ?></p>
            <h6 class="subheader"><?= __('Modified') ?></h6>
            <p><?= h($user->modified) ?></p>
        </div>
    </div>
</div>
<div class="related row">
    <div class="column large-12">
    <h4 class="subheader"><?= __('Related Blogs') ?></h4>
    <?php if (!empty($user->blogs)): ?>
    <table cellpadding="0" cellspacing="0">
        <tr>
            <th><?= __('Id') ?></th>
            <th><?= __('User Id') ?></th>
            <th><?= __('Title') ?></th>
            <th><?= __('Body') ?></th>
            <th><?= __('Created') ?></th>
            <th><?= __('Modified') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
        <?php foreach ($user->blogs as $blogs): ?>
        <tr>
            <td><?= h($blogs->id) ?></td>
            <td><?= h($blogs->user_id) ?></td>
            <td><?= h($blogs->title) ?></td>
            <td><?= h($blogs->body) ?></td>
            <td><?= h($blogs->created) ?></td>
            <td><?= h($blogs->modified) ?></td>

            <td class="actions">
                <?= $this->Html->link(__('View'), ['controller' => 'Blogs', 'action' => 'view', $blogs->id]) ?>

                <?= $this->Html->link(__('Edit'), ['controller' => 'Blogs', 'action' => 'edit', $blogs->id]) ?>

                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Blogs', 'action' => 'delete', $blogs->id], ['confirm' => __('Are you sure you want to delete # {0}?', $blogs->id)]) ?>

            </td>
        </tr>

        <?php endforeach; ?>
    </table>
    <?php endif; ?>
    </div>
</div>
<div class="related row">
    <div class="column large-12">
    <h4 class="subheader"><?= __('Related Works') ?></h4>
    <?php if (!empty($user->works)): ?>
    <table cellpadding="0" cellspacing="0">
        <tr>
            <th><?= __('Id') ?></th>
            <th><?= __('User Id') ?></th>
            <th><?= __('Title') ?></th>
            <th><?= __('Body') ?></th>
            <th><?= __('Period Start') ?></th>
            <th><?= __('Period End') ?></th>
            <th><?= __('Repository Name') ?></th>
            <th><?= __('Demo Url') ?></th>
            <th><?= __('Created') ?></th>
            <th><?= __('Modified') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
        <?php foreach ($user->works as $works): ?>
        <tr>
            <td><?= h($works->id) ?></td>
            <td><?= h($works->user_id) ?></td>
            <td><?= h($works->title) ?></td>
            <td><?= h($works->body) ?></td>
            <td><?= h($works->period_start) ?></td>
            <td><?= h($works->period_end) ?></td>
            <td><?= h($works->repository_name) ?></td>
            <td><?= h($works->demo_url) ?></td>
            <td><?= h($works->created) ?></td>
            <td><?= h($works->modified) ?></td>

            <td class="actions">
                <?= $this->Html->link(__('View'), ['controller' => 'Works', 'action' => 'view', $works->id]) ?>

                <?= $this->Html->link(__('Edit'), ['controller' => 'Works', 'action' => 'edit', $works->id]) ?>

                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Works', 'action' => 'delete', $works->id], ['confirm' => __('Are you sure you want to delete # {0}?', $works->id)]) ?>

            </td>
        </tr>

        <?php endforeach; ?>
    </table>
    <?php endif; ?>
    </div>
</div>
