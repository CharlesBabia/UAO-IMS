<div class="card-container">
    <h1 class="section-title">Pending Borrow Requests</h1>
    <div class="table-container">
        <table class="styled-table">
            <thead>
                <tr>
                    <th>Item</th>
                    <th>Borrowed Date</th>
                    <th>Return Date</th>
                    <th>Attachment</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($borrowings as $borrowing): ?>
                    <tr>
                        <td><?= h($borrowing->item->name) ?></td>
                        <td><?= $borrowing->borrowed_date ? h($borrowing->borrowed_date->format('M d, Y')) : 'N/A' ?></td>
                        <td><?= $borrowing->return_date ? h($borrowing->return_date->format('M d, Y')) : 'N/A' ?></td>
                        <td>
                            <?php if ($borrowing->attachment): ?>
                                <?= $this->Html->link('View Attachment', '/files/attachments/' . $borrowing->attachment, ['target' => '_blank']) ?>
                            <?php else: ?>
                                N/A
                            <?php endif; ?>
                        </td>
                        <td><?= h($borrowing->status) ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>