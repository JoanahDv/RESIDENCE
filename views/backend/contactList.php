<section id="dashboard">
    <section id="dashboardTable">

        <section id="contactList">
            <h1>MESSAGES</h1>

            <table class="table">
                <thead>
                    <tr class="desktop_row">
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>E-mail</th>
                        <th>Subject</th>
                        <th>Message</th>
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
                            <!-- FORM TO DELETE COMMENT -->
                            <div class="dashboardAction">
                                <td>Action</td>
                                <td>

                                    <form action="index.php?action=deleteMessage" method="post">
                                        <input type="hidden" value="<?php echo $message['id'] ?>" name="id" />
                                        <input type="submit" value="Delete" />
                                    </form>

                                    <form action="index.php?action=replyMessage" method="post">
                                        <input type="hidden" value="<?php echo $message['id'] ?>" name="id" />
                                        <input type='submit' name='Reply' value='Reply'>
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

                            </div>

                            <td>
                                <!-- FORM TO DELETE and REPLY MESSAGES -->
                                <div class="dashboardAction">
                                    <form action="index.php?action=deleteMessage" method="post">
                                        <input type="hidden" value="<?php echo $message['id'] ?>" name="id" />
                                        <input type="submit" value="Delete" />
                                    </form>

                                    <form action="index.php?action=replyMessage" method="post">
                                        <input type="hidden" value="<?php echo $message['id'] ?>" name="id" />
                                        <input type='submit' name='Reply' value='Reply'>
                                    </form>
                                </div>
                            </td>
                        </tr>


                    <?php } ?>
                </tbody>
            </table>
        </section>
    </section>
</section>