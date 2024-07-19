<?php
session_start();
require_once $_SERVER['DOCUMENT_ROOT'] . "/functions.php";
onlyUser();
model('Task');
$task_model = new Task();
$tasks = $task_model->get_all();

component('sidebar');
?>
<div class='app'>
    <main class='project'>
        <div class='project-info'>
            <h1>Все Задачи</h1>
        </div>
        <div class='project-tasks'>
            <div class='project-column'>
                <div class='project-column-heading'>
                    <h2 class='project-column-heading__title'>Task Ready</h2><button class='project-column-heading__options'><i class="fas fa-ellipsis-h"></i></button>
                </div>
                <?php
                    foreach( $tasks as $task ) {

                ?>
                <div class='task' draggable='true'>
                    <div class='task__tags'><span class='task__tag task__tag--copyright'><?php echo $task['name_task'] ?></span><button class='task__options'><i class="fas fa-ellipsis-h"></i></button></div>
                    <p><?php echo $task["description_task"] ?></p>
                    <div class='task__stats'>
                        <span><time datetime="2021-11-24T20:00:00"><i class="fas fa-flag"></i><?php echo date("d-m-Y", strtotime($task['date_start'])) . " " . $task['deadline'] ?></time></span>
                        <span class='task__owner'></span>
                    </div>
                </div>
                <?php 
                } 
            ?>
            </div>
            <div class='project-column'>
                <div class='project-column-heading'>
                    <h2 class='project-column-heading__title'>In Progress</h2><button class='project-column-heading__options'><i class="fas fa-ellipsis-h"></i></button>
                </div>

                <div class='task' draggable='true'>
                    <div class='task__tags'><span class='task__tag task__tag--design'>UI Design</span><button class='task__options'><i class="fas fa-ellipsis-h"></i></button></div>
                    <p>Replace lorem ipsum text in the final designs</p>
                    <div class='task__stats'>
                        <span><time datetime="2021-11-24T20:00:00"><i class="fas fa-flag"></i>Nov 24</time></span>
                        <span><i class="fas fa-comment"></i>5</span>
                        <span><i class="fas fa-paperclip"></i>5</span>
                        <span class='task__owner'></span>
                    </div>
                </div>

                <div class='task' draggable='true'>
                    <div class='task__tags'><span class='task__tag task__tag--illustration'>Illustration</span><button class='task__options'><i class="fas fa-ellipsis-h"></i></button></div>
                    <p>Create and generate the custom SVG illustrations.</p>
                    <div class='task__stats'>
                        <span><time datetime="2021-11-24T20:00:00"><i class="fas fa-flag"></i>Nov 24</time></span>
                        <span><i class="fas fa-comment"></i>8</span>
                        <span><i class="fas fa-paperclip"></i>7</span>
                        <span class='task__owner'></span>
                    </div>
                </div>

                <div class='task' draggable='true'>
                    <div class='task__tags'><span class='task__tag task__tag--copyright'>Copywriting</span><button class='task__options'><i class="fas fa-ellipsis-h"></i></button></div>
                    <p>Proof read the legal page and check for and loopholes</p>
                    <div class='task__stats'>
                        <span><time datetime="2021-11-24T20:00:00"><i class="fas fa-flag"></i>Nov 24</time></span>
                        <span><i class="fas fa-comment"></i>12</span>
                        <span><i class="fas fa-paperclip"></i>11</span>
                        <span class='task__owner'></span>
                    </div>
                </div>

                <div class='task' draggable='true'>
                    <div class='task__tags'><span class='task__tag task__tag--illustration'>Illustration</span><button class='task__options'><i class="fas fa-ellipsis-h"></i></button></div>
                    <p>Create the landing page graphics for the hero slider.</p>
                    <div class='task__stats'>
                        <span><time datetime="2021-11-24T20:00:00"><i class="fas fa-flag"></i>Nov 24</time></span>
                        <span><i class="fas fa-comment"></i>4</span>
                        <span><i class="fas fa-paperclip"></i>8</span>
                        <span class='task__owner'></span>
                    </div>
                </div>

            </div>
            <div class='project-column'>
                <div class='project-column-heading'>
                    <h2 class='project-column-heading__title'>Выполненые</h2><button class='project-column-heading__options'><i class="fas fa-ellipsis-h"></i></button>
                </div>
                <?php
                    foreach( $tasks as $task ) {

                ?>
                <div class='task' draggable='true'>
                    <div class='task__tags'><span class='task__tag task__tag--copyright'><?php echo $task['name_task'] ?></span><button class='task__options'><i class="fas fa-ellipsis-h"></i></button></div>
                    <p><?php echo $task["description_task"] ?></p>
                    <div class='task__stats'>
                        <span><time datetime="2021-11-24T20:00:00"><i class="fas fa-flag"></i><?php echo date("d-m-Y", strtotime($task['date_start'])) . " " . $task['deadline'] ?></time></span>
                        <span class='task__owner'></span>
                    </div>
                </div>
                <?php 
                } 
            ?>
    </main>
    <aside class='task-details'>
        <div class='tag-progress'>
            <h2>Task Progress</h2>
            <div class='tag-progress'>
                <p>Copywriting <span>3/8</span></p>
                <progress class="progress progress--copyright" max="8" value="3"> 3 </progress>
            </div>
            <div class='tag-progress'>
                <p>Illustration <span>6/10</span></p>
                <progress class="progress progress--illustration" max="10" value="6"> 6 </progress>
            </div>
            <div class='tag-progress'>
                <p>UI Design <span>2/7</span></p>
                <progress class="progress progress--design" max="7" value="2"> 2 </progress>
            </div>
        </div>
        <div class='task-activity'>
            <h2>Recent Activity</h2>
            <ul>
                <li>
                    <span class='task-icon task-icon--attachment'><i class="fas fa-paperclip"></i></span>
                    <b>Andrea </b>uploaded 3 documents
                    <time datetime="2021-11-24T20:00:00">Aug 10</time>
                </li>
                <li>
                    <span class='task-icon task-icon--comment'><i class="fas fa-comment"></i></span>
                    <b>Karen </b> left a comment
                    <time datetime="2021-11-24T20:00:00">Aug 10</time>
                </li>
                <li>
                    <span class='task-icon task-icon--edit'><i class="fas fa-pencil-alt"></i></span>
                    <b>Karen </b>uploaded 3 documents
                    <time datetime="2021-11-24T20:00:00">Aug 11</time>
                </li>
                <li>
                    <span class='task-icon task-icon--attachment'><i class="fas fa-paperclip"></i></span>
                    <b>Andrea </b>uploaded 3 documents
                    <time datetime="2021-11-24T20:00:00">Aug 11</time>
                </li>
                <li>
                    <span class='task-icon task-icon--comment'><i class="fas fa-comment"></i></span>
                    <b>Karen </b> left a comment
                    <time datetime="2021-11-24T20:00:00">Aug 12</time>
                </li>
            </ul>
        </div>
    </aside>
</div>

<?php
component('footer');
?>