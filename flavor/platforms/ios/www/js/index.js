/*
 * Licensed to the Apache Software Foundation (ASF) under one
 * or more contributor license agreements.  See the NOTICE file
 * distributed with this work for additional information
 * regarding copyright ownership.  The ASF licenses this file
 * to you under the Apache License, Version 2.0 (the
 * "License"); you may not use this file except in compliance
 * with the License.  You may obtain a copy of the License at
 *
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing,
 * software distributed under the License is distributed on an
 * "AS IS" BASIS, WITHOUT WARRANTIES OR CONDITIONS OF ANY
 * KIND, either express or implied.  See the License for the
 * specific language governing permissions and limitations
 * under the License.
 */
var app = {
    // Application Constructor
    initialize: function () {
        document.addEventListener('deviceready', this.onDeviceReady.bind(this), false);
    },

    // deviceready Event Handler
    //
    // Bind any cordova events here. Common events are:
    // 'pause', 'resume', etc.
    onDeviceReady: function () {
        this.receivedEvent('deviceready');
    },

    // Update DOM on a Received Event
    receivedEvent: function (id) {
        var parentElement = document.getElementById(id);
        var listeningElement = parentElement.querySelector('.listening');
        var receivedElement = parentElement.querySelector('.received');

        listeningElement.setAttribute('style', 'display:none;');
        receivedElement.setAttribute('style', 'display:block;');

        console.log('Received Event: ' + id);
    }
};

app.initialize();

// Popup When Recipe to be Deleted
$(function () {

    var $deleteButton = $('#deleteButton');
    var $deletePopup = $('#deletePopup');
    $deletePopup.hide();
    $deleteButton.on('click', function(event) {
        event.preventDefault();
        $deletePopup.show();
    });

});

// Hide Edit Button on Load
$(function () {

    var $editButton = $('#editNameButton');
    $editButton.hide();

});

// Add Recipe Name
$(function () {

    var $button = $('#addNameButton');
    var $textInput = $('input.nameInput:text');
    var $editButton = $('#editNameButton');

    $button.on('click', function (event) {
        event.preventDefault();
        var newText = $textInput.val();
        $('ul.ulName li:last').after(
            '<li>' +
            '<h3 class="noPaddingTop">' + newText + '</h3>' +
            '</li>'
        );
        $button.hide();
        $textInput.hide();
        $editButton.show();
    });

});

// Edit Recipe Name on Edit Button Click

$(function () {

    var $button = $('#addNameButton');
    var $textInput = $('input.nameInput:text');
    var $editButton = $('#editNameButton');

    $editButton.on('click', function(event) {
        event.preventDefault();
        $button.show();
        $textInput.val('');
        $textInput.show();
        $editButton.hide();
        $('ul.ulName li:last').remove();
    });

});

// Add Recipe Ingredients
$(function () {

    var $button = $('#addIngredientButton');
    var $textInput = $('input.ingredientInput:text');

    $button.on('click', function (event) {
        event.preventDefault();
        var newText = $textInput.val();
        $('ul.ulIngredients li:last').after(
            '<li>' +
            '<h6>' + newText + '</h6>' +
            '</li>'
        );
        $textInput.val('');

        // Remove Ingredient on Click
        $('li').on('click', function(){
            $(this).remove();
        });
    });

});

// Add Recipe Instructions
$(function () {

    var $button = $('#addInstructionButton');
    var $textInput = $('input.instructionInput:text');

    $button.on('click', function (event) {
        event.preventDefault();
        var newText = $textInput.val();
        $('ul.ulInstruction li:last').after(
            '<li>' +
            '<h6>' + newText + '</h6>' +
            '</li>'
        );
        $textInput.val('');

        // Remove Instruction on Click
        $('li').on('click', function(){
            $(this).remove();
        });
    });

});

// Add Recipe Nutrition Facts
/*
$(function () {

    var $button = $('#addNutritionalButton');
    var $textInput = $('input.nutritionalInput:text');

    $button.on('click', function (event) {
        event.preventDefault();
        var newText = $textInput.val();
        $('ul.ulNutritional li:last').after(
            '<li>' +
            '<h6>' + newText + '</h6>' +
            '</li>'
        );
        $textInput.val('');
    });

});
*/

// Add Recipe Tags
$(function () {

    var $button = $('#addTagButton');
    var $textInput = $('input.tagInput:text');

    $button.on('click', function (event) {
        event.preventDefault();
        var newText = $textInput.val();
        $('ul.ulTags li:last').after(
            '<li>' +
            '<h6>' + newText + '</h6>' +
            '</li>'
        );
        $textInput.val('');

        // Remove Instruction on Click
        $('li').on('click', function(){
            $(this).remove();
        });
    });

});

// Add Ingredient to Search For
$(function () {
    
        var $button = $('#addIngredientButtonSearch');
        var $textInput = $('input.ingredientSearchInput:text');
    
        $button.on('click', function (event) {
            event.preventDefault();
            var newText = $textInput.val();
            $('ul.ulSearchIngredient li:last').after(
                '<li>' +
                '<h6>' + newText + '</h6>' +
                '</li>'
            );
            $textInput.val('');
        });
    
});

// Add Tag to Search For
$(function () {
    
        var $button = $('#addTagButtonSearch');
        var $textInput = $('input.tagSearchInput:text');
    
        $button.on('click', function (event) {
            event.preventDefault();
            var newText = $textInput.val();
            $('ul.ulTagSearch li:last').after(
                '<li>' +
                '<h6>' + newText + '</h6>' +
                '</li>'
            );
            $textInput.val('');
        });
    
});