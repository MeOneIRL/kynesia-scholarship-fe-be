function handler() {
    return {
        trainingForm: [{
            training_name: '',
            training_period: '',
            training_year: '',
            training_organizer: '',
            training_certificate: '',
        }],
        achievementForm: [{
            achievement_name: '',
            achievement_organizer: '',
            achievement_level: '',
        }],
        languageForm: [{
            language: '',
            language_talk: '',
            language_write: '',
            language_read: '',
            language_listen: '',
        }],
        organizationForm: [{
            organization_name: '',
            organization_period: '',
            organization_position: '',
            organization_detail: '',
        }],
        talentForm: [{
            talent_name: '',
        }],
        addNewFieldTraining() {
            this.trainingForm.push({    
                training_name: '',
                training_period: '',
                training_year: '',
                penyelenggara: '',
                training_certificate: '',
            });
        },
        addNewFieldAchievement() {
            this.achievementForm.push({    
                achievement_name: '',
                achievement_organizer: '',
                achievement_level: '',
            });
        },
        addNewFieldLanguage() {
            this.languageForm.push({    
                language: '',
                language_talk: '',
                language_write: '',
                language_read: '',
                language_listen: '',
            });
        },
        addNewFieldOrganization() {
            this.organizationForm.push({    
                organization_name: '',
                organization_period: '',
                organization_position: '',
                organization_detail: '',
            });
        },
        addNewFieldTalent() {
            this.talentForm.push({    
                talent_name: '',
            });
        },
        removeFieldTraining(index) {
            this.trainingForm.splice(index, 1);
        },
        removeFieldAchievement(index) {
            this.achievementForm.splice(index, 1);
        },
        removeFieldLanguage(index) {
            this.languageForm.splice(index, 1);
        },
        removeFieldOrganization(index) {
            this.organizationForm.splice(index, 1);
        },
        removeFieldTalent(index) {
            this.talentForm.splice(index, 1);
        },
    }
}