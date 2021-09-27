<section id="contactList">

    <div class="contactlisthead">
        <h3>WELCOME TO YOUR DASHBOARD</h3>
        <p>MESSAGES</p>
    </div>

    <table class="table">
        <thead>
            <tr class="desktop_row">
                <th>First Name</th>
                <th>Last Name</th>
                <th>E-mail</th>
                <th>Subject</th>
                <th>Message</th>
                <th>Date & Time</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($contacts as $contact) { ?>
                <tr class="mobile_row">
                    <td>First Name</td>
                    <td>

                        <h4><?php echo $contact['first_name'] ?></h4>
                    </td>
                </tr>
                <tr class="mobile_row">
                    <td>Last Name</td>
                    <td>
                        <p><?php echo $contact['last_name'] ?></p>
                    </td>
                </tr>
                <tr class="mobile_row">
                    <td>E-mail</td>
                    <td>
                        <p><?php echo $contact['email'] ?></p>
                    </td>
                </tr>
                <tr class="mobile_row">
                    <td>Subject</td>
                    <td>
                        <p><?php echo $contact['subject'] ?></p>
                    </td>
                </tr>
                <tr class="mobile_row last_row">
                    <td>Message</td>
                    <td>
                        <p><?php echo $contact['message'] ?></p>
                    </td>
                </tr>
                <tr class="mobile_row last_row">
                    <td>Date/Time</td>
                    <td>
                        <p><?php echo $contact['date'] ?></p>
                    </td>
                </tr>

                <tr class="mobile_row last_row">
                    <!-- FORM TO DELETE COMMENT -->
                    <div class="dashboardAction">
                        <td>Action</td>
                        <td>
                            <form action="index.php?action=deleteMessage" method="post">
                                <input type="hidden" value="<?php echo $message['id'] ?>" name="id" />
                                <input type="submit" value="Delete" />
                            </form>
                        </td>
                    </div>
                </tr>

                <tr class="desktop_row">
                    <div class="contact_content">
                        <td>
                            <h4><?php echo $contact['first_name'] ?></h4>
                        </td>
                        <td>
                            <p><?php echo $contact['last_name'] ?></p>
                        </td>
                        <td>
                            <p><?php echo $contact['email'] ?></p>
                        </td>
                        <td>
                            <p><?php echo $contact['subject'] ?></p>
                        </td>
                        <td>
                            <p><?php echo $contact['message'] ?></p>
                        </td>
                        <td>
                            <p><?php echo $contact['date'] ?></p>
                        </td>

                    </div>

                    <td>
                        <!-- FORM TO DELETE and REPLY MESSAGES -->
                        <div class="dashboardAction">
                            <form action="index.php?action=deleteMessage" method="post">
                                <input type="hidden" value="<?php echo $message['id'] ?>" name="id" />
                                <input type="submit" value="Delete" />
                            </form>
                    </td>
                </tr>


            <?php } ?>
        </tbody>
    </table>
</section>