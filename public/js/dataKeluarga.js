function handler() {
    return {
        childForm: [{
            child: '',
            child_name: '',
            child_birthplace: '',
            child_birthdate: '',
            child_education: '',
            child_job: '',
        }],
        addNewField() {
            this.childForm.push({
                child_name: '',
                child_sex: '',
                child_birthplace: '',
                child_birthdate: '',
                child_education: '',
                child_job: '',
            });
        },
        removeField(index) {
            this.childForm.splice(index, 1);
        },
    }
}