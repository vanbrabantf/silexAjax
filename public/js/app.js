new Vue({
    el: '#locationfinder',

    data: {
        search: {
            location : '',
            weekends : false,
            support : false,
            strict : false
        },
    },

    methods: {
        findOffices: function(e) {
            e.preventDefault();
            var self = this;

            $.post('', this.search).done(function (data) {
                var data = JSON.parse(data);
                data = self.addGlyphicons(data);
                self.$set('offices', data);
            });
        },
        addGlyphicons: function(data) {
            $.each(data, function( index, value ) {

                if(value.has_support_desk === 'Y') {
                    data[index].has_support_desk = 'glyphicon-ok';
                } else {
                    data[index].has_support_desk = 'glyphicon-remove';
                }

                if(value.is_open_in_weekends === 'Y') {
                    data[index].is_open_in_weekends = 'glyphicon-ok';
                } else {
                    data[index].is_open_in_weekends = 'glyphicon-remove';
                }
            });

            return data;
        }
    }
});