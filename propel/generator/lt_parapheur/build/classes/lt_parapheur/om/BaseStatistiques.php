<?php


/**
 * Base class that represents a row from the 'statistiques' table.
 *
 * 
 *
 * @package    propel.generator.lt_parapheur.om
 */
abstract class BaseStatistiques extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'StatistiquesPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        StatistiquesPeer
     */
    protected static $peer;

    /**
     * The flag var to prevent infinite loop in deep copy
     * @var       boolean
     */
    protected $startCopy = false;

    /**
     * The value for the id_statistique field.
     * @var        int
     */
    protected $id_statistique;

    /**
     * The value for the annee field.
     * @var        int
     */
    protected $annee;

    /**
     * The value for the mois field.
     * @var        string
     */
    protected $mois;

    /**
     * The value for the demandes_recues field.
     * @var        int
     */
    protected $demandes_recues;

    /**
     * The value for the demandes_recues_cumul_a_fin_mois field.
     * @var        int
     */
    protected $demandes_recues_cumul_a_fin_mois;

    /**
     * The value for the demandes_recues_evolution_par_mois field.
     * @var        int
     */
    protected $demandes_recues_evolution_par_mois;

    /**
     * The value for the demandes_traitees field.
     * @var        int
     */
    protected $demandes_traitees;

    /**
     * The value for the demandes_traitees_cumul_a_fin_mois field.
     * @var        int
     */
    protected $demandes_traitees_cumul_a_fin_mois;

    /**
     * The value for the demandes_traitees_evolution_par_mois field.
     * @var        int
     */
    protected $demandes_traitees_evolution_par_mois;

    /**
     * The value for the demandes_cloturees field.
     * @var        int
     */
    protected $demandes_cloturees;

    /**
     * The value for the demandes_cloturee_cumul_a_fin_mois field.
     * @var        int
     */
    protected $demandes_cloturee_cumul_a_fin_mois;

    /**
     * The value for the demandes_cloturee_evolution_par_mois field.
     * @var        int
     */
    protected $demandes_cloturee_evolution_par_mois;

    /**
     * The value for the demandes_reponses_envoyees field.
     * @var        int
     */
    protected $demandes_reponses_envoyees;

    /**
     * The value for the demandes_reponses_envoyees_cumul_a_fin_mois field.
     * @var        int
     */
    protected $demandes_reponses_envoyees_cumul_a_fin_mois;

    /**
     * The value for the demandes_reponses_envoyees_evolution_par_mois field.
     * @var        int
     */
    protected $demandes_reponses_envoyees_evolution_par_mois;

    /**
     * The value for the demandes_hors_attribution_erronees field.
     * @var        int
     */
    protected $demandes_hors_attribution_erronees;

    /**
     * The value for the demandes_hors_attribution_erronees_cumul_a_fin_mois field.
     * @var        int
     */
    protected $demandes_hors_attribution_erronees_cumul_a_fin_mois;

    /**
     * The value for the demandes_hors_attribution_erronees_evolution_par_mois field.
     * @var        int
     */
    protected $demandes_hors_attribution_erronees_evolution_par_mois;

    /**
     * The value for the demandes_en_cours field.
     * @var        int
     */
    protected $demandes_en_cours;

    /**
     * The value for the demandes_en_cours_cumul_a_fin_mois field.
     * @var        int
     */
    protected $demandes_en_cours_cumul_a_fin_mois;

    /**
     * The value for the demandes_en_cours_evolution_par_mois field.
     * @var        int
     */
    protected $demandes_en_cours_evolution_par_mois;

    /**
     * The value for the demandes_affectees_reouverte field.
     * @var        int
     */
    protected $demandes_affectees_reouverte;

    /**
     * The value for the demandes_affectees_reouverte_cumul_a_fin_mois field.
     * @var        int
     */
    protected $demandes_affectees_reouverte_cumul_a_fin_mois;

    /**
     * The value for the demandes_affectees_reouverte_evolution_par_mois field.
     * @var        int
     */
    protected $demandes_affectees_reouverte_evolution_par_mois;

    /**
     * The value for the demandes_en_proposition_reponse field.
     * @var        int
     */
    protected $demandes_en_proposition_reponse;

    /**
     * The value for the demandes_en_proposition_reponse_cumul_a_fin_mois field.
     * @var        int
     */
    protected $demandes_en_proposition_reponse_cumul_a_fin_mois;

    /**
     * The value for the demandes_en_proposition_reponse_evolution_par_mois field.
     * @var        int
     */
    protected $demandes_en_proposition_reponse_evolution_par_mois;

    /**
     * The value for the delai_moyen_mois field.
     * @var        int
     */
    protected $delai_moyen_mois;

    /**
     * The value for the evolution_delai_moyen field.
     * @var        int
     */
    protected $evolution_delai_moyen;

    /**
     * The value for the delai_minimal_mois field.
     * @var        int
     */
    protected $delai_minimal_mois;

    /**
     * The value for the evolution_delai_minimal field.
     * @var        int
     */
    protected $evolution_delai_minimal;

    /**
     * The value for the delai_maximal field.
     * @var        int
     */
    protected $delai_maximal;

    /**
     * The value for the evolution_delai_maximal field.
     * @var        int
     */
    protected $evolution_delai_maximal;

    /**
     * The value for the taux_reponse field.
     * @var        int
     */
    protected $taux_reponse;

    /**
     * The value for the evolution_taux_reponse field.
     * @var        int
     */
    protected $evolution_taux_reponse;

    /**
     * The value for the taux_satisfaction_requerants field.
     * @var        int
     */
    protected $taux_satisfaction_requerants;

    /**
     * The value for the evolution_taux_satisfaction field.
     * @var        int
     */
    protected $evolution_taux_satisfaction;

    /**
     * The value for the cumul_taux_satisfaction field.
     * @var        int
     */
    protected $cumul_taux_satisfaction;

    /**
     * The value for the demandes_assistance_interne field.
     * @var        int
     */
    protected $demandes_assistance_interne;

    /**
     * The value for the evolution_demande_interne field.
     * @var        int
     */
    protected $evolution_demande_interne;

    /**
     * The value for the cumul_demande_interne field.
     * @var        int
     */
    protected $cumul_demande_interne;

    /**
     * The value for the date_mise_a_jour field.
     * @var        string
     */
    protected $date_mise_a_jour;

    /**
     * The value for the id_entite field.
     * @var        int
     */
    protected $id_entite;

    /**
     * Flag to prevent endless save loop, if this object is referenced
     * by another object which falls in this transaction.
     * @var        boolean
     */
    protected $alreadyInSave = false;

    /**
     * Flag to prevent endless validation loop, if this object is referenced
     * by another object which falls in this transaction.
     * @var        boolean
     */
    protected $alreadyInValidation = false;

    /**
     * Flag to prevent endless clearAllReferences($deep=true) loop, if this object is referenced
     * @var        boolean
     */
    protected $alreadyInClearAllReferencesDeep = false;

    /**
     * Get the [id_statistique] column value.
     * 
     * @return int
     */
    public function getIdStatistique()
    {

        return $this->id_statistique;
    }

    /**
     * Get the [annee] column value.
     * 
     * @return int
     */
    public function getAnnee()
    {

        return $this->annee;
    }

    /**
     * Get the [mois] column value.
     * 
     * @return string
     */
    public function getMois()
    {

        return $this->mois;
    }

    /**
     * Get the [demandes_recues] column value.
     * 
     * @return int
     */
    public function getDemandesRecues()
    {

        return $this->demandes_recues;
    }

    /**
     * Get the [demandes_recues_cumul_a_fin_mois] column value.
     * 
     * @return int
     */
    public function getDemandesRecuesCumulAFinMois()
    {

        return $this->demandes_recues_cumul_a_fin_mois;
    }

    /**
     * Get the [demandes_recues_evolution_par_mois] column value.
     * 
     * @return int
     */
    public function getDemandesRecuesEvolutionParMois()
    {

        return $this->demandes_recues_evolution_par_mois;
    }

    /**
     * Get the [demandes_traitees] column value.
     * 
     * @return int
     */
    public function getDemandesTraitees()
    {

        return $this->demandes_traitees;
    }

    /**
     * Get the [demandes_traitees_cumul_a_fin_mois] column value.
     * 
     * @return int
     */
    public function getDemandesTraiteesCumulAFinMois()
    {

        return $this->demandes_traitees_cumul_a_fin_mois;
    }

    /**
     * Get the [demandes_traitees_evolution_par_mois] column value.
     * 
     * @return int
     */
    public function getDemandesTraiteesEvolutionParMois()
    {

        return $this->demandes_traitees_evolution_par_mois;
    }

    /**
     * Get the [demandes_cloturees] column value.
     * 
     * @return int
     */
    public function getDemandesCloturees()
    {

        return $this->demandes_cloturees;
    }

    /**
     * Get the [demandes_cloturee_cumul_a_fin_mois] column value.
     * 
     * @return int
     */
    public function getDemandesClotureeCumulAFinMois()
    {

        return $this->demandes_cloturee_cumul_a_fin_mois;
    }

    /**
     * Get the [demandes_cloturee_evolution_par_mois] column value.
     * 
     * @return int
     */
    public function getDemandesClotureeEvolutionParMois()
    {

        return $this->demandes_cloturee_evolution_par_mois;
    }

    /**
     * Get the [demandes_reponses_envoyees] column value.
     * 
     * @return int
     */
    public function getDemandesReponsesEnvoyees()
    {

        return $this->demandes_reponses_envoyees;
    }

    /**
     * Get the [demandes_reponses_envoyees_cumul_a_fin_mois] column value.
     * 
     * @return int
     */
    public function getDemandesReponsesEnvoyeesCumulAFinMois()
    {

        return $this->demandes_reponses_envoyees_cumul_a_fin_mois;
    }

    /**
     * Get the [demandes_reponses_envoyees_evolution_par_mois] column value.
     * 
     * @return int
     */
    public function getDemandesReponsesEnvoyeesEvolutionParMois()
    {

        return $this->demandes_reponses_envoyees_evolution_par_mois;
    }

    /**
     * Get the [demandes_hors_attribution_erronees] column value.
     * 
     * @return int
     */
    public function getDemandesHorsAttributionErronees()
    {

        return $this->demandes_hors_attribution_erronees;
    }

    /**
     * Get the [demandes_hors_attribution_erronees_cumul_a_fin_mois] column value.
     * 
     * @return int
     */
    public function getDemandesHorsAttributionErroneesCumulAFinMois()
    {

        return $this->demandes_hors_attribution_erronees_cumul_a_fin_mois;
    }

    /**
     * Get the [demandes_hors_attribution_erronees_evolution_par_mois] column value.
     * 
     * @return int
     */
    public function getDemandesHorsAttributionErroneesEvolutionParMois()
    {

        return $this->demandes_hors_attribution_erronees_evolution_par_mois;
    }

    /**
     * Get the [demandes_en_cours] column value.
     * 
     * @return int
     */
    public function getDemandesEnCours()
    {

        return $this->demandes_en_cours;
    }

    /**
     * Get the [demandes_en_cours_cumul_a_fin_mois] column value.
     * 
     * @return int
     */
    public function getDemandesEnCoursCumulAFinMois()
    {

        return $this->demandes_en_cours_cumul_a_fin_mois;
    }

    /**
     * Get the [demandes_en_cours_evolution_par_mois] column value.
     * 
     * @return int
     */
    public function getDemandesEnCoursEvolutionParMois()
    {

        return $this->demandes_en_cours_evolution_par_mois;
    }

    /**
     * Get the [demandes_affectees_reouverte] column value.
     * 
     * @return int
     */
    public function getDemandesAffecteesReouverte()
    {

        return $this->demandes_affectees_reouverte;
    }

    /**
     * Get the [demandes_affectees_reouverte_cumul_a_fin_mois] column value.
     * 
     * @return int
     */
    public function getDemandesAffecteesReouverteCumulAFinMois()
    {

        return $this->demandes_affectees_reouverte_cumul_a_fin_mois;
    }

    /**
     * Get the [demandes_affectees_reouverte_evolution_par_mois] column value.
     * 
     * @return int
     */
    public function getDemandesAffecteesReouverteEvolutionParMois()
    {

        return $this->demandes_affectees_reouverte_evolution_par_mois;
    }

    /**
     * Get the [demandes_en_proposition_reponse] column value.
     * 
     * @return int
     */
    public function getDemandesEnPropositionReponse()
    {

        return $this->demandes_en_proposition_reponse;
    }

    /**
     * Get the [demandes_en_proposition_reponse_cumul_a_fin_mois] column value.
     * 
     * @return int
     */
    public function getDemandesEnPropositionReponseCumulAFinMois()
    {

        return $this->demandes_en_proposition_reponse_cumul_a_fin_mois;
    }

    /**
     * Get the [demandes_en_proposition_reponse_evolution_par_mois] column value.
     * 
     * @return int
     */
    public function getDemandesEnPropositionReponseEvolutionParMois()
    {

        return $this->demandes_en_proposition_reponse_evolution_par_mois;
    }

    /**
     * Get the [delai_moyen_mois] column value.
     * 
     * @return int
     */
    public function getDelaiMoyenMois()
    {

        return $this->delai_moyen_mois;
    }

    /**
     * Get the [evolution_delai_moyen] column value.
     * 
     * @return int
     */
    public function getEvolutionDelaiMoyen()
    {

        return $this->evolution_delai_moyen;
    }

    /**
     * Get the [delai_minimal_mois] column value.
     * 
     * @return int
     */
    public function getDelaiMinimalMois()
    {

        return $this->delai_minimal_mois;
    }

    /**
     * Get the [evolution_delai_minimal] column value.
     * 
     * @return int
     */
    public function getEvolutionDelaiMinimal()
    {

        return $this->evolution_delai_minimal;
    }

    /**
     * Get the [delai_maximal] column value.
     * 
     * @return int
     */
    public function getDelaiMaximal()
    {

        return $this->delai_maximal;
    }

    /**
     * Get the [evolution_delai_maximal] column value.
     * 
     * @return int
     */
    public function getEvolutionDelaiMaximal()
    {

        return $this->evolution_delai_maximal;
    }

    /**
     * Get the [taux_reponse] column value.
     * 
     * @return int
     */
    public function getTauxReponse()
    {

        return $this->taux_reponse;
    }

    /**
     * Get the [evolution_taux_reponse] column value.
     * 
     * @return int
     */
    public function getEvolutionTauxReponse()
    {

        return $this->evolution_taux_reponse;
    }

    /**
     * Get the [taux_satisfaction_requerants] column value.
     * 
     * @return int
     */
    public function getTauxSatisfactionRequerants()
    {

        return $this->taux_satisfaction_requerants;
    }

    /**
     * Get the [evolution_taux_satisfaction] column value.
     * 
     * @return int
     */
    public function getEvolutionTauxSatisfaction()
    {

        return $this->evolution_taux_satisfaction;
    }

    /**
     * Get the [cumul_taux_satisfaction] column value.
     * 
     * @return int
     */
    public function getCumulTauxSatisfaction()
    {

        return $this->cumul_taux_satisfaction;
    }

    /**
     * Get the [demandes_assistance_interne] column value.
     * 
     * @return int
     */
    public function getDemandesAssistanceInterne()
    {

        return $this->demandes_assistance_interne;
    }

    /**
     * Get the [evolution_demande_interne] column value.
     * 
     * @return int
     */
    public function getEvolutionDemandeInterne()
    {

        return $this->evolution_demande_interne;
    }

    /**
     * Get the [cumul_demande_interne] column value.
     * 
     * @return int
     */
    public function getCumulDemandeInterne()
    {

        return $this->cumul_demande_interne;
    }

    /**
     * Get the [date_mise_a_jour] column value.
     * 
     * @return string
     */
    public function getDateMiseAJour()
    {

        return $this->date_mise_a_jour;
    }

    /**
     * Get the [id_entite] column value.
     * 
     * @return int
     */
    public function getIdEntite()
    {

        return $this->id_entite;
    }

    /**
     * Set the value of [id_statistique] column.
     * 
     * @param int $v new value
     * @return Statistiques The current object (for fluent API support)
     */
    public function setIdStatistique($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_statistique !== $v) {
            $this->id_statistique = $v;
            $this->modifiedColumns[] = StatistiquesPeer::ID_STATISTIQUE;
        }


        return $this;
    } // setIdStatistique()

    /**
     * Set the value of [annee] column.
     * 
     * @param int $v new value
     * @return Statistiques The current object (for fluent API support)
     */
    public function setAnnee($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->annee !== $v) {
            $this->annee = $v;
            $this->modifiedColumns[] = StatistiquesPeer::ANNEE;
        }


        return $this;
    } // setAnnee()

    /**
     * Set the value of [mois] column.
     * 
     * @param string $v new value
     * @return Statistiques The current object (for fluent API support)
     */
    public function setMois($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->mois !== $v) {
            $this->mois = $v;
            $this->modifiedColumns[] = StatistiquesPeer::MOIS;
        }


        return $this;
    } // setMois()

    /**
     * Set the value of [demandes_recues] column.
     * 
     * @param int $v new value
     * @return Statistiques The current object (for fluent API support)
     */
    public function setDemandesRecues($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->demandes_recues !== $v) {
            $this->demandes_recues = $v;
            $this->modifiedColumns[] = StatistiquesPeer::DEMANDES_RECUES;
        }


        return $this;
    } // setDemandesRecues()

    /**
     * Set the value of [demandes_recues_cumul_a_fin_mois] column.
     * 
     * @param int $v new value
     * @return Statistiques The current object (for fluent API support)
     */
    public function setDemandesRecuesCumulAFinMois($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->demandes_recues_cumul_a_fin_mois !== $v) {
            $this->demandes_recues_cumul_a_fin_mois = $v;
            $this->modifiedColumns[] = StatistiquesPeer::DEMANDES_RECUES_CUMUL_A_FIN_MOIS;
        }


        return $this;
    } // setDemandesRecuesCumulAFinMois()

    /**
     * Set the value of [demandes_recues_evolution_par_mois] column.
     * 
     * @param int $v new value
     * @return Statistiques The current object (for fluent API support)
     */
    public function setDemandesRecuesEvolutionParMois($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->demandes_recues_evolution_par_mois !== $v) {
            $this->demandes_recues_evolution_par_mois = $v;
            $this->modifiedColumns[] = StatistiquesPeer::DEMANDES_RECUES_EVOLUTION_PAR_MOIS;
        }


        return $this;
    } // setDemandesRecuesEvolutionParMois()

    /**
     * Set the value of [demandes_traitees] column.
     * 
     * @param int $v new value
     * @return Statistiques The current object (for fluent API support)
     */
    public function setDemandesTraitees($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->demandes_traitees !== $v) {
            $this->demandes_traitees = $v;
            $this->modifiedColumns[] = StatistiquesPeer::DEMANDES_TRAITEES;
        }


        return $this;
    } // setDemandesTraitees()

    /**
     * Set the value of [demandes_traitees_cumul_a_fin_mois] column.
     * 
     * @param int $v new value
     * @return Statistiques The current object (for fluent API support)
     */
    public function setDemandesTraiteesCumulAFinMois($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->demandes_traitees_cumul_a_fin_mois !== $v) {
            $this->demandes_traitees_cumul_a_fin_mois = $v;
            $this->modifiedColumns[] = StatistiquesPeer::DEMANDES_TRAITEES_CUMUL_A_FIN_MOIS;
        }


        return $this;
    } // setDemandesTraiteesCumulAFinMois()

    /**
     * Set the value of [demandes_traitees_evolution_par_mois] column.
     * 
     * @param int $v new value
     * @return Statistiques The current object (for fluent API support)
     */
    public function setDemandesTraiteesEvolutionParMois($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->demandes_traitees_evolution_par_mois !== $v) {
            $this->demandes_traitees_evolution_par_mois = $v;
            $this->modifiedColumns[] = StatistiquesPeer::DEMANDES_TRAITEES_EVOLUTION_PAR_MOIS;
        }


        return $this;
    } // setDemandesTraiteesEvolutionParMois()

    /**
     * Set the value of [demandes_cloturees] column.
     * 
     * @param int $v new value
     * @return Statistiques The current object (for fluent API support)
     */
    public function setDemandesCloturees($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->demandes_cloturees !== $v) {
            $this->demandes_cloturees = $v;
            $this->modifiedColumns[] = StatistiquesPeer::DEMANDES_CLOTUREES;
        }


        return $this;
    } // setDemandesCloturees()

    /**
     * Set the value of [demandes_cloturee_cumul_a_fin_mois] column.
     * 
     * @param int $v new value
     * @return Statistiques The current object (for fluent API support)
     */
    public function setDemandesClotureeCumulAFinMois($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->demandes_cloturee_cumul_a_fin_mois !== $v) {
            $this->demandes_cloturee_cumul_a_fin_mois = $v;
            $this->modifiedColumns[] = StatistiquesPeer::DEMANDES_CLOTUREE_CUMUL_A_FIN_MOIS;
        }


        return $this;
    } // setDemandesClotureeCumulAFinMois()

    /**
     * Set the value of [demandes_cloturee_evolution_par_mois] column.
     * 
     * @param int $v new value
     * @return Statistiques The current object (for fluent API support)
     */
    public function setDemandesClotureeEvolutionParMois($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->demandes_cloturee_evolution_par_mois !== $v) {
            $this->demandes_cloturee_evolution_par_mois = $v;
            $this->modifiedColumns[] = StatistiquesPeer::DEMANDES_CLOTUREE_EVOLUTION_PAR_MOIS;
        }


        return $this;
    } // setDemandesClotureeEvolutionParMois()

    /**
     * Set the value of [demandes_reponses_envoyees] column.
     * 
     * @param int $v new value
     * @return Statistiques The current object (for fluent API support)
     */
    public function setDemandesReponsesEnvoyees($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->demandes_reponses_envoyees !== $v) {
            $this->demandes_reponses_envoyees = $v;
            $this->modifiedColumns[] = StatistiquesPeer::DEMANDES_REPONSES_ENVOYEES;
        }


        return $this;
    } // setDemandesReponsesEnvoyees()

    /**
     * Set the value of [demandes_reponses_envoyees_cumul_a_fin_mois] column.
     * 
     * @param int $v new value
     * @return Statistiques The current object (for fluent API support)
     */
    public function setDemandesReponsesEnvoyeesCumulAFinMois($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->demandes_reponses_envoyees_cumul_a_fin_mois !== $v) {
            $this->demandes_reponses_envoyees_cumul_a_fin_mois = $v;
            $this->modifiedColumns[] = StatistiquesPeer::DEMANDES_REPONSES_ENVOYEES_CUMUL_A_FIN_MOIS;
        }


        return $this;
    } // setDemandesReponsesEnvoyeesCumulAFinMois()

    /**
     * Set the value of [demandes_reponses_envoyees_evolution_par_mois] column.
     * 
     * @param int $v new value
     * @return Statistiques The current object (for fluent API support)
     */
    public function setDemandesReponsesEnvoyeesEvolutionParMois($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->demandes_reponses_envoyees_evolution_par_mois !== $v) {
            $this->demandes_reponses_envoyees_evolution_par_mois = $v;
            $this->modifiedColumns[] = StatistiquesPeer::DEMANDES_REPONSES_ENVOYEES_EVOLUTION_PAR_MOIS;
        }


        return $this;
    } // setDemandesReponsesEnvoyeesEvolutionParMois()

    /**
     * Set the value of [demandes_hors_attribution_erronees] column.
     * 
     * @param int $v new value
     * @return Statistiques The current object (for fluent API support)
     */
    public function setDemandesHorsAttributionErronees($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->demandes_hors_attribution_erronees !== $v) {
            $this->demandes_hors_attribution_erronees = $v;
            $this->modifiedColumns[] = StatistiquesPeer::DEMANDES_HORS_ATTRIBUTION_ERRONEES;
        }


        return $this;
    } // setDemandesHorsAttributionErronees()

    /**
     * Set the value of [demandes_hors_attribution_erronees_cumul_a_fin_mois] column.
     * 
     * @param int $v new value
     * @return Statistiques The current object (for fluent API support)
     */
    public function setDemandesHorsAttributionErroneesCumulAFinMois($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->demandes_hors_attribution_erronees_cumul_a_fin_mois !== $v) {
            $this->demandes_hors_attribution_erronees_cumul_a_fin_mois = $v;
            $this->modifiedColumns[] = StatistiquesPeer::DEMANDES_HORS_ATTRIBUTION_ERRONEES_CUMUL_A_FIN_MOIS;
        }


        return $this;
    } // setDemandesHorsAttributionErroneesCumulAFinMois()

    /**
     * Set the value of [demandes_hors_attribution_erronees_evolution_par_mois] column.
     * 
     * @param int $v new value
     * @return Statistiques The current object (for fluent API support)
     */
    public function setDemandesHorsAttributionErroneesEvolutionParMois($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->demandes_hors_attribution_erronees_evolution_par_mois !== $v) {
            $this->demandes_hors_attribution_erronees_evolution_par_mois = $v;
            $this->modifiedColumns[] = StatistiquesPeer::DEMANDES_HORS_ATTRIBUTION_ERRONEES_EVOLUTION_PAR_MOIS;
        }


        return $this;
    } // setDemandesHorsAttributionErroneesEvolutionParMois()

    /**
     * Set the value of [demandes_en_cours] column.
     * 
     * @param int $v new value
     * @return Statistiques The current object (for fluent API support)
     */
    public function setDemandesEnCours($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->demandes_en_cours !== $v) {
            $this->demandes_en_cours = $v;
            $this->modifiedColumns[] = StatistiquesPeer::DEMANDES_EN_COURS;
        }


        return $this;
    } // setDemandesEnCours()

    /**
     * Set the value of [demandes_en_cours_cumul_a_fin_mois] column.
     * 
     * @param int $v new value
     * @return Statistiques The current object (for fluent API support)
     */
    public function setDemandesEnCoursCumulAFinMois($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->demandes_en_cours_cumul_a_fin_mois !== $v) {
            $this->demandes_en_cours_cumul_a_fin_mois = $v;
            $this->modifiedColumns[] = StatistiquesPeer::DEMANDES_EN_COURS_CUMUL_A_FIN_MOIS;
        }


        return $this;
    } // setDemandesEnCoursCumulAFinMois()

    /**
     * Set the value of [demandes_en_cours_evolution_par_mois] column.
     * 
     * @param int $v new value
     * @return Statistiques The current object (for fluent API support)
     */
    public function setDemandesEnCoursEvolutionParMois($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->demandes_en_cours_evolution_par_mois !== $v) {
            $this->demandes_en_cours_evolution_par_mois = $v;
            $this->modifiedColumns[] = StatistiquesPeer::DEMANDES_EN_COURS_EVOLUTION_PAR_MOIS;
        }


        return $this;
    } // setDemandesEnCoursEvolutionParMois()

    /**
     * Set the value of [demandes_affectees_reouverte] column.
     * 
     * @param int $v new value
     * @return Statistiques The current object (for fluent API support)
     */
    public function setDemandesAffecteesReouverte($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->demandes_affectees_reouverte !== $v) {
            $this->demandes_affectees_reouverte = $v;
            $this->modifiedColumns[] = StatistiquesPeer::DEMANDES_AFFECTEES_REOUVERTE;
        }


        return $this;
    } // setDemandesAffecteesReouverte()

    /**
     * Set the value of [demandes_affectees_reouverte_cumul_a_fin_mois] column.
     * 
     * @param int $v new value
     * @return Statistiques The current object (for fluent API support)
     */
    public function setDemandesAffecteesReouverteCumulAFinMois($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->demandes_affectees_reouverte_cumul_a_fin_mois !== $v) {
            $this->demandes_affectees_reouverte_cumul_a_fin_mois = $v;
            $this->modifiedColumns[] = StatistiquesPeer::DEMANDES_AFFECTEES_REOUVERTE_CUMUL_A_FIN_MOIS;
        }


        return $this;
    } // setDemandesAffecteesReouverteCumulAFinMois()

    /**
     * Set the value of [demandes_affectees_reouverte_evolution_par_mois] column.
     * 
     * @param int $v new value
     * @return Statistiques The current object (for fluent API support)
     */
    public function setDemandesAffecteesReouverteEvolutionParMois($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->demandes_affectees_reouverte_evolution_par_mois !== $v) {
            $this->demandes_affectees_reouverte_evolution_par_mois = $v;
            $this->modifiedColumns[] = StatistiquesPeer::DEMANDES_AFFECTEES_REOUVERTE_EVOLUTION_PAR_MOIS;
        }


        return $this;
    } // setDemandesAffecteesReouverteEvolutionParMois()

    /**
     * Set the value of [demandes_en_proposition_reponse] column.
     * 
     * @param int $v new value
     * @return Statistiques The current object (for fluent API support)
     */
    public function setDemandesEnPropositionReponse($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->demandes_en_proposition_reponse !== $v) {
            $this->demandes_en_proposition_reponse = $v;
            $this->modifiedColumns[] = StatistiquesPeer::DEMANDES_EN_PROPOSITION_REPONSE;
        }


        return $this;
    } // setDemandesEnPropositionReponse()

    /**
     * Set the value of [demandes_en_proposition_reponse_cumul_a_fin_mois] column.
     * 
     * @param int $v new value
     * @return Statistiques The current object (for fluent API support)
     */
    public function setDemandesEnPropositionReponseCumulAFinMois($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->demandes_en_proposition_reponse_cumul_a_fin_mois !== $v) {
            $this->demandes_en_proposition_reponse_cumul_a_fin_mois = $v;
            $this->modifiedColumns[] = StatistiquesPeer::DEMANDES_EN_PROPOSITION_REPONSE_CUMUL_A_FIN_MOIS;
        }


        return $this;
    } // setDemandesEnPropositionReponseCumulAFinMois()

    /**
     * Set the value of [demandes_en_proposition_reponse_evolution_par_mois] column.
     * 
     * @param int $v new value
     * @return Statistiques The current object (for fluent API support)
     */
    public function setDemandesEnPropositionReponseEvolutionParMois($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->demandes_en_proposition_reponse_evolution_par_mois !== $v) {
            $this->demandes_en_proposition_reponse_evolution_par_mois = $v;
            $this->modifiedColumns[] = StatistiquesPeer::DEMANDES_EN_PROPOSITION_REPONSE_EVOLUTION_PAR_MOIS;
        }


        return $this;
    } // setDemandesEnPropositionReponseEvolutionParMois()

    /**
     * Set the value of [delai_moyen_mois] column.
     * 
     * @param int $v new value
     * @return Statistiques The current object (for fluent API support)
     */
    public function setDelaiMoyenMois($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->delai_moyen_mois !== $v) {
            $this->delai_moyen_mois = $v;
            $this->modifiedColumns[] = StatistiquesPeer::DELAI_MOYEN_MOIS;
        }


        return $this;
    } // setDelaiMoyenMois()

    /**
     * Set the value of [evolution_delai_moyen] column.
     * 
     * @param int $v new value
     * @return Statistiques The current object (for fluent API support)
     */
    public function setEvolutionDelaiMoyen($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->evolution_delai_moyen !== $v) {
            $this->evolution_delai_moyen = $v;
            $this->modifiedColumns[] = StatistiquesPeer::EVOLUTION_DELAI_MOYEN;
        }


        return $this;
    } // setEvolutionDelaiMoyen()

    /**
     * Set the value of [delai_minimal_mois] column.
     * 
     * @param int $v new value
     * @return Statistiques The current object (for fluent API support)
     */
    public function setDelaiMinimalMois($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->delai_minimal_mois !== $v) {
            $this->delai_minimal_mois = $v;
            $this->modifiedColumns[] = StatistiquesPeer::DELAI_MINIMAL_MOIS;
        }


        return $this;
    } // setDelaiMinimalMois()

    /**
     * Set the value of [evolution_delai_minimal] column.
     * 
     * @param int $v new value
     * @return Statistiques The current object (for fluent API support)
     */
    public function setEvolutionDelaiMinimal($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->evolution_delai_minimal !== $v) {
            $this->evolution_delai_minimal = $v;
            $this->modifiedColumns[] = StatistiquesPeer::EVOLUTION_DELAI_MINIMAL;
        }


        return $this;
    } // setEvolutionDelaiMinimal()

    /**
     * Set the value of [delai_maximal] column.
     * 
     * @param int $v new value
     * @return Statistiques The current object (for fluent API support)
     */
    public function setDelaiMaximal($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->delai_maximal !== $v) {
            $this->delai_maximal = $v;
            $this->modifiedColumns[] = StatistiquesPeer::DELAI_MAXIMAL;
        }


        return $this;
    } // setDelaiMaximal()

    /**
     * Set the value of [evolution_delai_maximal] column.
     * 
     * @param int $v new value
     * @return Statistiques The current object (for fluent API support)
     */
    public function setEvolutionDelaiMaximal($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->evolution_delai_maximal !== $v) {
            $this->evolution_delai_maximal = $v;
            $this->modifiedColumns[] = StatistiquesPeer::EVOLUTION_DELAI_MAXIMAL;
        }


        return $this;
    } // setEvolutionDelaiMaximal()

    /**
     * Set the value of [taux_reponse] column.
     * 
     * @param int $v new value
     * @return Statistiques The current object (for fluent API support)
     */
    public function setTauxReponse($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->taux_reponse !== $v) {
            $this->taux_reponse = $v;
            $this->modifiedColumns[] = StatistiquesPeer::TAUX_REPONSE;
        }


        return $this;
    } // setTauxReponse()

    /**
     * Set the value of [evolution_taux_reponse] column.
     * 
     * @param int $v new value
     * @return Statistiques The current object (for fluent API support)
     */
    public function setEvolutionTauxReponse($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->evolution_taux_reponse !== $v) {
            $this->evolution_taux_reponse = $v;
            $this->modifiedColumns[] = StatistiquesPeer::EVOLUTION_TAUX_REPONSE;
        }


        return $this;
    } // setEvolutionTauxReponse()

    /**
     * Set the value of [taux_satisfaction_requerants] column.
     * 
     * @param int $v new value
     * @return Statistiques The current object (for fluent API support)
     */
    public function setTauxSatisfactionRequerants($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->taux_satisfaction_requerants !== $v) {
            $this->taux_satisfaction_requerants = $v;
            $this->modifiedColumns[] = StatistiquesPeer::TAUX_SATISFACTION_REQUERANTS;
        }


        return $this;
    } // setTauxSatisfactionRequerants()

    /**
     * Set the value of [evolution_taux_satisfaction] column.
     * 
     * @param int $v new value
     * @return Statistiques The current object (for fluent API support)
     */
    public function setEvolutionTauxSatisfaction($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->evolution_taux_satisfaction !== $v) {
            $this->evolution_taux_satisfaction = $v;
            $this->modifiedColumns[] = StatistiquesPeer::EVOLUTION_TAUX_SATISFACTION;
        }


        return $this;
    } // setEvolutionTauxSatisfaction()

    /**
     * Set the value of [cumul_taux_satisfaction] column.
     * 
     * @param int $v new value
     * @return Statistiques The current object (for fluent API support)
     */
    public function setCumulTauxSatisfaction($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->cumul_taux_satisfaction !== $v) {
            $this->cumul_taux_satisfaction = $v;
            $this->modifiedColumns[] = StatistiquesPeer::CUMUL_TAUX_SATISFACTION;
        }


        return $this;
    } // setCumulTauxSatisfaction()

    /**
     * Set the value of [demandes_assistance_interne] column.
     * 
     * @param int $v new value
     * @return Statistiques The current object (for fluent API support)
     */
    public function setDemandesAssistanceInterne($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->demandes_assistance_interne !== $v) {
            $this->demandes_assistance_interne = $v;
            $this->modifiedColumns[] = StatistiquesPeer::DEMANDES_ASSISTANCE_INTERNE;
        }


        return $this;
    } // setDemandesAssistanceInterne()

    /**
     * Set the value of [evolution_demande_interne] column.
     * 
     * @param int $v new value
     * @return Statistiques The current object (for fluent API support)
     */
    public function setEvolutionDemandeInterne($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->evolution_demande_interne !== $v) {
            $this->evolution_demande_interne = $v;
            $this->modifiedColumns[] = StatistiquesPeer::EVOLUTION_DEMANDE_INTERNE;
        }


        return $this;
    } // setEvolutionDemandeInterne()

    /**
     * Set the value of [cumul_demande_interne] column.
     * 
     * @param int $v new value
     * @return Statistiques The current object (for fluent API support)
     */
    public function setCumulDemandeInterne($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->cumul_demande_interne !== $v) {
            $this->cumul_demande_interne = $v;
            $this->modifiedColumns[] = StatistiquesPeer::CUMUL_DEMANDE_INTERNE;
        }


        return $this;
    } // setCumulDemandeInterne()

    /**
     * Set the value of [date_mise_a_jour] column.
     * 
     * @param string $v new value
     * @return Statistiques The current object (for fluent API support)
     */
    public function setDateMiseAJour($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->date_mise_a_jour !== $v) {
            $this->date_mise_a_jour = $v;
            $this->modifiedColumns[] = StatistiquesPeer::DATE_MISE_A_JOUR;
        }


        return $this;
    } // setDateMiseAJour()

    /**
     * Set the value of [id_entite] column.
     * 
     * @param int $v new value
     * @return Statistiques The current object (for fluent API support)
     */
    public function setIdEntite($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_entite !== $v) {
            $this->id_entite = $v;
            $this->modifiedColumns[] = StatistiquesPeer::ID_ENTITE;
        }


        return $this;
    } // setIdEntite()

    /**
     * Indicates whether the columns in this object are only set to default values.
     *
     * This method can be used in conjunction with isModified() to indicate whether an object is both
     * modified _and_ has some values set which are non-default.
     *
     * @return boolean Whether the columns in this object are only been set with default values.
     */
    public function hasOnlyDefaultValues()
    {
        // otherwise, everything was equal, so return true
        return true;
    } // hasOnlyDefaultValues()

    /**
     * Hydrates (populates) the object variables with values from the database resultset.
     *
     * An offset (0-based "start column") is specified so that objects can be hydrated
     * with a subset of the columns in the resultset rows.  This is needed, for example,
     * for results of JOIN queries where the resultset row includes columns from two or
     * more tables.
     *
     * @param array $row The row returned by PDOStatement->fetch(PDO::FETCH_NUM)
     * @param int $startcol 0-based offset column which indicates which resultset column to start with.
     * @param boolean $rehydrate Whether this object is being re-hydrated from the database.
     * @return int             next starting column
     * @throws PropelException - Any caught Exception will be rewrapped as a PropelException.
     */
    public function hydrate($row, $startcol = 0, $rehydrate = false)
    {
        try {

            $this->id_statistique = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
            $this->annee = ($row[$startcol + 1] !== null) ? (int) $row[$startcol + 1] : null;
            $this->mois = ($row[$startcol + 2] !== null) ? (string) $row[$startcol + 2] : null;
            $this->demandes_recues = ($row[$startcol + 3] !== null) ? (int) $row[$startcol + 3] : null;
            $this->demandes_recues_cumul_a_fin_mois = ($row[$startcol + 4] !== null) ? (int) $row[$startcol + 4] : null;
            $this->demandes_recues_evolution_par_mois = ($row[$startcol + 5] !== null) ? (int) $row[$startcol + 5] : null;
            $this->demandes_traitees = ($row[$startcol + 6] !== null) ? (int) $row[$startcol + 6] : null;
            $this->demandes_traitees_cumul_a_fin_mois = ($row[$startcol + 7] !== null) ? (int) $row[$startcol + 7] : null;
            $this->demandes_traitees_evolution_par_mois = ($row[$startcol + 8] !== null) ? (int) $row[$startcol + 8] : null;
            $this->demandes_cloturees = ($row[$startcol + 9] !== null) ? (int) $row[$startcol + 9] : null;
            $this->demandes_cloturee_cumul_a_fin_mois = ($row[$startcol + 10] !== null) ? (int) $row[$startcol + 10] : null;
            $this->demandes_cloturee_evolution_par_mois = ($row[$startcol + 11] !== null) ? (int) $row[$startcol + 11] : null;
            $this->demandes_reponses_envoyees = ($row[$startcol + 12] !== null) ? (int) $row[$startcol + 12] : null;
            $this->demandes_reponses_envoyees_cumul_a_fin_mois = ($row[$startcol + 13] !== null) ? (int) $row[$startcol + 13] : null;
            $this->demandes_reponses_envoyees_evolution_par_mois = ($row[$startcol + 14] !== null) ? (int) $row[$startcol + 14] : null;
            $this->demandes_hors_attribution_erronees = ($row[$startcol + 15] !== null) ? (int) $row[$startcol + 15] : null;
            $this->demandes_hors_attribution_erronees_cumul_a_fin_mois = ($row[$startcol + 16] !== null) ? (int) $row[$startcol + 16] : null;
            $this->demandes_hors_attribution_erronees_evolution_par_mois = ($row[$startcol + 17] !== null) ? (int) $row[$startcol + 17] : null;
            $this->demandes_en_cours = ($row[$startcol + 18] !== null) ? (int) $row[$startcol + 18] : null;
            $this->demandes_en_cours_cumul_a_fin_mois = ($row[$startcol + 19] !== null) ? (int) $row[$startcol + 19] : null;
            $this->demandes_en_cours_evolution_par_mois = ($row[$startcol + 20] !== null) ? (int) $row[$startcol + 20] : null;
            $this->demandes_affectees_reouverte = ($row[$startcol + 21] !== null) ? (int) $row[$startcol + 21] : null;
            $this->demandes_affectees_reouverte_cumul_a_fin_mois = ($row[$startcol + 22] !== null) ? (int) $row[$startcol + 22] : null;
            $this->demandes_affectees_reouverte_evolution_par_mois = ($row[$startcol + 23] !== null) ? (int) $row[$startcol + 23] : null;
            $this->demandes_en_proposition_reponse = ($row[$startcol + 24] !== null) ? (int) $row[$startcol + 24] : null;
            $this->demandes_en_proposition_reponse_cumul_a_fin_mois = ($row[$startcol + 25] !== null) ? (int) $row[$startcol + 25] : null;
            $this->demandes_en_proposition_reponse_evolution_par_mois = ($row[$startcol + 26] !== null) ? (int) $row[$startcol + 26] : null;
            $this->delai_moyen_mois = ($row[$startcol + 27] !== null) ? (int) $row[$startcol + 27] : null;
            $this->evolution_delai_moyen = ($row[$startcol + 28] !== null) ? (int) $row[$startcol + 28] : null;
            $this->delai_minimal_mois = ($row[$startcol + 29] !== null) ? (int) $row[$startcol + 29] : null;
            $this->evolution_delai_minimal = ($row[$startcol + 30] !== null) ? (int) $row[$startcol + 30] : null;
            $this->delai_maximal = ($row[$startcol + 31] !== null) ? (int) $row[$startcol + 31] : null;
            $this->evolution_delai_maximal = ($row[$startcol + 32] !== null) ? (int) $row[$startcol + 32] : null;
            $this->taux_reponse = ($row[$startcol + 33] !== null) ? (int) $row[$startcol + 33] : null;
            $this->evolution_taux_reponse = ($row[$startcol + 34] !== null) ? (int) $row[$startcol + 34] : null;
            $this->taux_satisfaction_requerants = ($row[$startcol + 35] !== null) ? (int) $row[$startcol + 35] : null;
            $this->evolution_taux_satisfaction = ($row[$startcol + 36] !== null) ? (int) $row[$startcol + 36] : null;
            $this->cumul_taux_satisfaction = ($row[$startcol + 37] !== null) ? (int) $row[$startcol + 37] : null;
            $this->demandes_assistance_interne = ($row[$startcol + 38] !== null) ? (int) $row[$startcol + 38] : null;
            $this->evolution_demande_interne = ($row[$startcol + 39] !== null) ? (int) $row[$startcol + 39] : null;
            $this->cumul_demande_interne = ($row[$startcol + 40] !== null) ? (int) $row[$startcol + 40] : null;
            $this->date_mise_a_jour = ($row[$startcol + 41] !== null) ? (string) $row[$startcol + 41] : null;
            $this->id_entite = ($row[$startcol + 42] !== null) ? (int) $row[$startcol + 42] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 43; // 43 = StatistiquesPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating Statistiques object", $e);
        }
    }

    /**
     * Checks and repairs the internal consistency of the object.
     *
     * This method is executed after an already-instantiated object is re-hydrated
     * from the database.  It exists to check any foreign keys to make sure that
     * the objects related to the current object are correct based on foreign key.
     *
     * You can override this method in the stub class, but you should always invoke
     * the base method from the overridden method (i.e. parent::ensureConsistency()),
     * in case your model changes.
     *
     * @throws PropelException
     */
    public function ensureConsistency()
    {

    } // ensureConsistency

    /**
     * Reloads this object from datastore based on primary key and (optionally) resets all associated objects.
     *
     * This will only work if the object has been saved and has a valid primary key set.
     *
     * @param boolean $deep (optional) Whether to also de-associated any related objects.
     * @param PropelPDO $con (optional) The PropelPDO connection to use.
     * @return void
     * @throws PropelException - if this object is deleted, unsaved or doesn't have pk match in db
     */
    public function reload($deep = false, PropelPDO $con = null)
    {
        if ($this->isDeleted()) {
            throw new PropelException("Cannot reload a deleted object.");
        }

        if ($this->isNew()) {
            throw new PropelException("Cannot reload an unsaved object.");
        }

        if ($con === null) {
            $con = Propel::getConnection(StatistiquesPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = StatistiquesPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
        $row = $stmt->fetch(PDO::FETCH_NUM);
        $stmt->closeCursor();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true); // rehydrate

        if ($deep) {  // also de-associate any related objects?

        } // if (deep)
    }

    /**
     * Removes this object from datastore and sets delete attribute.
     *
     * @param PropelPDO $con
     * @return void
     * @throws PropelException
     * @throws Exception
     * @see        BaseObject::setDeleted()
     * @see        BaseObject::isDeleted()
     */
    public function delete(PropelPDO $con = null)
    {
        if ($this->isDeleted()) {
            throw new PropelException("This object has already been deleted.");
        }

        if ($con === null) {
            $con = Propel::getConnection(StatistiquesPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = StatistiquesQuery::create()
                ->filterByPrimaryKey($this->getPrimaryKey());
            $ret = $this->preDelete($con);
            if ($ret) {
                $deleteQuery->delete($con);
                $this->postDelete($con);
                $con->commit();
                $this->setDeleted(true);
            } else {
                $con->commit();
            }
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Persists this object to the database.
     *
     * If the object is new, it inserts it; otherwise an update is performed.
     * All modified related objects will also be persisted in the doSave()
     * method.  This method wraps all precipitate database operations in a
     * single transaction.
     *
     * @param PropelPDO $con
     * @return int             The number of rows affected by this insert/update and any referring fk objects' save() operations.
     * @throws PropelException
     * @throws Exception
     * @see        doSave()
     */
    public function save(PropelPDO $con = null)
    {
        if ($this->isDeleted()) {
            throw new PropelException("You cannot save an object that has been deleted.");
        }

        if ($con === null) {
            $con = Propel::getConnection(StatistiquesPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        $isInsert = $this->isNew();
        try {
            $ret = $this->preSave($con);
            if ($isInsert) {
                $ret = $ret && $this->preInsert($con);
            } else {
                $ret = $ret && $this->preUpdate($con);
            }
            if ($ret) {
                $affectedRows = $this->doSave($con);
                if ($isInsert) {
                    $this->postInsert($con);
                } else {
                    $this->postUpdate($con);
                }
                $this->postSave($con);
                StatistiquesPeer::addInstanceToPool($this);
            } else {
                $affectedRows = 0;
            }
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs the work of inserting or updating the row in the database.
     *
     * If the object is new, it inserts it; otherwise an update is performed.
     * All related objects are also updated in this method.
     *
     * @param PropelPDO $con
     * @return int             The number of rows affected by this insert/update and any referring fk objects' save() operations.
     * @throws PropelException
     * @see        save()
     */
    protected function doSave(PropelPDO $con)
    {
        $affectedRows = 0; // initialize var to track total num of affected rows
        if (!$this->alreadyInSave) {
            $this->alreadyInSave = true;

            if ($this->isNew() || $this->isModified()) {
                // persist changes
                if ($this->isNew()) {
                    $this->doInsert($con);
                } else {
                    $this->doUpdate($con);
                }
                $affectedRows += 1;
                $this->resetModified();
            }

            $this->alreadyInSave = false;

        }

        return $affectedRows;
    } // doSave()

    /**
     * Insert the row in the database.
     *
     * @param PropelPDO $con
     *
     * @throws PropelException
     * @see        doSave()
     */
    protected function doInsert(PropelPDO $con)
    {
        $modifiedColumns = array();
        $index = 0;

        $this->modifiedColumns[] = StatistiquesPeer::ID_STATISTIQUE;
        if (null !== $this->id_statistique) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . StatistiquesPeer::ID_STATISTIQUE . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(StatistiquesPeer::ID_STATISTIQUE)) {
            $modifiedColumns[':p' . $index++]  = '`ID_STATISTIQUE`';
        }
        if ($this->isColumnModified(StatistiquesPeer::ANNEE)) {
            $modifiedColumns[':p' . $index++]  = '`ANNEE`';
        }
        if ($this->isColumnModified(StatistiquesPeer::MOIS)) {
            $modifiedColumns[':p' . $index++]  = '`MOIS`';
        }
        if ($this->isColumnModified(StatistiquesPeer::DEMANDES_RECUES)) {
            $modifiedColumns[':p' . $index++]  = '`DEMANDES_RECUES`';
        }
        if ($this->isColumnModified(StatistiquesPeer::DEMANDES_RECUES_CUMUL_A_FIN_MOIS)) {
            $modifiedColumns[':p' . $index++]  = '`DEMANDES_RECUES_CUMUL_A_FIN_MOIS`';
        }
        if ($this->isColumnModified(StatistiquesPeer::DEMANDES_RECUES_EVOLUTION_PAR_MOIS)) {
            $modifiedColumns[':p' . $index++]  = '`DEMANDES_RECUES_EVOLUTION_PAR_MOIS`';
        }
        if ($this->isColumnModified(StatistiquesPeer::DEMANDES_TRAITEES)) {
            $modifiedColumns[':p' . $index++]  = '`DEMANDES_TRAITEES`';
        }
        if ($this->isColumnModified(StatistiquesPeer::DEMANDES_TRAITEES_CUMUL_A_FIN_MOIS)) {
            $modifiedColumns[':p' . $index++]  = '`DEMANDES_TRAITEES_CUMUL_A_FIN_MOIS`';
        }
        if ($this->isColumnModified(StatistiquesPeer::DEMANDES_TRAITEES_EVOLUTION_PAR_MOIS)) {
            $modifiedColumns[':p' . $index++]  = '`DEMANDES_TRAITEES_EVOLUTION_PAR_MOIS`';
        }
        if ($this->isColumnModified(StatistiquesPeer::DEMANDES_CLOTUREES)) {
            $modifiedColumns[':p' . $index++]  = '`DEMANDES_CLOTUREES`';
        }
        if ($this->isColumnModified(StatistiquesPeer::DEMANDES_CLOTUREE_CUMUL_A_FIN_MOIS)) {
            $modifiedColumns[':p' . $index++]  = '`DEMANDES_CLOTUREE_CUMUL_A_FIN_MOIS`';
        }
        if ($this->isColumnModified(StatistiquesPeer::DEMANDES_CLOTUREE_EVOLUTION_PAR_MOIS)) {
            $modifiedColumns[':p' . $index++]  = '`DEMANDES_CLOTUREE_EVOLUTION_PAR_MOIS`';
        }
        if ($this->isColumnModified(StatistiquesPeer::DEMANDES_REPONSES_ENVOYEES)) {
            $modifiedColumns[':p' . $index++]  = '`DEMANDES_REPONSES_ENVOYEES`';
        }
        if ($this->isColumnModified(StatistiquesPeer::DEMANDES_REPONSES_ENVOYEES_CUMUL_A_FIN_MOIS)) {
            $modifiedColumns[':p' . $index++]  = '`DEMANDES_REPONSES_ENVOYEES_CUMUL_A_FIN_MOIS`';
        }
        if ($this->isColumnModified(StatistiquesPeer::DEMANDES_REPONSES_ENVOYEES_EVOLUTION_PAR_MOIS)) {
            $modifiedColumns[':p' . $index++]  = '`DEMANDES_REPONSES_ENVOYEES_EVOLUTION_PAR_MOIS`';
        }
        if ($this->isColumnModified(StatistiquesPeer::DEMANDES_HORS_ATTRIBUTION_ERRONEES)) {
            $modifiedColumns[':p' . $index++]  = '`DEMANDES_HORS_ATTRIBUTION_ERRONEES`';
        }
        if ($this->isColumnModified(StatistiquesPeer::DEMANDES_HORS_ATTRIBUTION_ERRONEES_CUMUL_A_FIN_MOIS)) {
            $modifiedColumns[':p' . $index++]  = '`DEMANDES_HORS_ATTRIBUTION_ERRONEES_CUMUL_A_FIN_MOIS`';
        }
        if ($this->isColumnModified(StatistiquesPeer::DEMANDES_HORS_ATTRIBUTION_ERRONEES_EVOLUTION_PAR_MOIS)) {
            $modifiedColumns[':p' . $index++]  = '`DEMANDES_HORS_ATTRIBUTION_ERRONEES_EVOLUTION_PAR_MOIS`';
        }
        if ($this->isColumnModified(StatistiquesPeer::DEMANDES_EN_COURS)) {
            $modifiedColumns[':p' . $index++]  = '`DEMANDES_EN_COURS`';
        }
        if ($this->isColumnModified(StatistiquesPeer::DEMANDES_EN_COURS_CUMUL_A_FIN_MOIS)) {
            $modifiedColumns[':p' . $index++]  = '`DEMANDES_EN_COURS_CUMUL_A_FIN_MOIS`';
        }
        if ($this->isColumnModified(StatistiquesPeer::DEMANDES_EN_COURS_EVOLUTION_PAR_MOIS)) {
            $modifiedColumns[':p' . $index++]  = '`DEMANDES_EN_COURS_EVOLUTION_PAR_MOIS`';
        }
        if ($this->isColumnModified(StatistiquesPeer::DEMANDES_AFFECTEES_REOUVERTE)) {
            $modifiedColumns[':p' . $index++]  = '`DEMANDES_AFFECTEES_REOUVERTE`';
        }
        if ($this->isColumnModified(StatistiquesPeer::DEMANDES_AFFECTEES_REOUVERTE_CUMUL_A_FIN_MOIS)) {
            $modifiedColumns[':p' . $index++]  = '`DEMANDES_AFFECTEES_REOUVERTE_CUMUL_A_FIN_MOIS`';
        }
        if ($this->isColumnModified(StatistiquesPeer::DEMANDES_AFFECTEES_REOUVERTE_EVOLUTION_PAR_MOIS)) {
            $modifiedColumns[':p' . $index++]  = '`DEMANDES_AFFECTEES_REOUVERTE_EVOLUTION_PAR_MOIS`';
        }
        if ($this->isColumnModified(StatistiquesPeer::DEMANDES_EN_PROPOSITION_REPONSE)) {
            $modifiedColumns[':p' . $index++]  = '`DEMANDES_EN_PROPOSITION_REPONSE`';
        }
        if ($this->isColumnModified(StatistiquesPeer::DEMANDES_EN_PROPOSITION_REPONSE_CUMUL_A_FIN_MOIS)) {
            $modifiedColumns[':p' . $index++]  = '`DEMANDES_EN_PROPOSITION_REPONSE_CUMUL_A_FIN_MOIS`';
        }
        if ($this->isColumnModified(StatistiquesPeer::DEMANDES_EN_PROPOSITION_REPONSE_EVOLUTION_PAR_MOIS)) {
            $modifiedColumns[':p' . $index++]  = '`DEMANDES_EN_PROPOSITION_REPONSE_EVOLUTION_PAR_MOIS`';
        }
        if ($this->isColumnModified(StatistiquesPeer::DELAI_MOYEN_MOIS)) {
            $modifiedColumns[':p' . $index++]  = '`DELAI_MOYEN_MOIS`';
        }
        if ($this->isColumnModified(StatistiquesPeer::EVOLUTION_DELAI_MOYEN)) {
            $modifiedColumns[':p' . $index++]  = '`EVOLUTION_DELAI_MOYEN`';
        }
        if ($this->isColumnModified(StatistiquesPeer::DELAI_MINIMAL_MOIS)) {
            $modifiedColumns[':p' . $index++]  = '`DELAI_MINIMAL_MOIS`';
        }
        if ($this->isColumnModified(StatistiquesPeer::EVOLUTION_DELAI_MINIMAL)) {
            $modifiedColumns[':p' . $index++]  = '`EVOLUTION_DELAI_MINIMAL`';
        }
        if ($this->isColumnModified(StatistiquesPeer::DELAI_MAXIMAL)) {
            $modifiedColumns[':p' . $index++]  = '`DELAI_MAXIMAL`';
        }
        if ($this->isColumnModified(StatistiquesPeer::EVOLUTION_DELAI_MAXIMAL)) {
            $modifiedColumns[':p' . $index++]  = '`EVOLUTION_DELAI_MAXIMAL`';
        }
        if ($this->isColumnModified(StatistiquesPeer::TAUX_REPONSE)) {
            $modifiedColumns[':p' . $index++]  = '`TAUX_REPONSE`';
        }
        if ($this->isColumnModified(StatistiquesPeer::EVOLUTION_TAUX_REPONSE)) {
            $modifiedColumns[':p' . $index++]  = '`EVOLUTION_TAUX_REPONSE`';
        }
        if ($this->isColumnModified(StatistiquesPeer::TAUX_SATISFACTION_REQUERANTS)) {
            $modifiedColumns[':p' . $index++]  = '`TAUX_SATISFACTION_REQUERANTS`';
        }
        if ($this->isColumnModified(StatistiquesPeer::EVOLUTION_TAUX_SATISFACTION)) {
            $modifiedColumns[':p' . $index++]  = '`EVOLUTION_TAUX_SATISFACTION`';
        }
        if ($this->isColumnModified(StatistiquesPeer::CUMUL_TAUX_SATISFACTION)) {
            $modifiedColumns[':p' . $index++]  = '`CUMUL_TAUX_SATISFACTION`';
        }
        if ($this->isColumnModified(StatistiquesPeer::DEMANDES_ASSISTANCE_INTERNE)) {
            $modifiedColumns[':p' . $index++]  = '`DEMANDES_ASSISTANCE_INTERNE`';
        }
        if ($this->isColumnModified(StatistiquesPeer::EVOLUTION_DEMANDE_INTERNE)) {
            $modifiedColumns[':p' . $index++]  = '`EVOLUTION_DEMANDE_INTERNE`';
        }
        if ($this->isColumnModified(StatistiquesPeer::CUMUL_DEMANDE_INTERNE)) {
            $modifiedColumns[':p' . $index++]  = '`CUMUL_DEMANDE_INTERNE`';
        }
        if ($this->isColumnModified(StatistiquesPeer::DATE_MISE_A_JOUR)) {
            $modifiedColumns[':p' . $index++]  = '`DATE_MISE_A_JOUR`';
        }
        if ($this->isColumnModified(StatistiquesPeer::ID_ENTITE)) {
            $modifiedColumns[':p' . $index++]  = '`ID_ENTITE`';
        }

        $sql = sprintf(
            'INSERT INTO `statistiques` (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case '`ID_STATISTIQUE`':						
                        $stmt->bindValue($identifier, $this->id_statistique, PDO::PARAM_INT);
                        break;
                    case '`ANNEE`':						
                        $stmt->bindValue($identifier, $this->annee, PDO::PARAM_INT);
                        break;
                    case '`MOIS`':						
                        $stmt->bindValue($identifier, $this->mois, PDO::PARAM_STR);
                        break;
                    case '`DEMANDES_RECUES`':						
                        $stmt->bindValue($identifier, $this->demandes_recues, PDO::PARAM_INT);
                        break;
                    case '`DEMANDES_RECUES_CUMUL_A_FIN_MOIS`':						
                        $stmt->bindValue($identifier, $this->demandes_recues_cumul_a_fin_mois, PDO::PARAM_INT);
                        break;
                    case '`DEMANDES_RECUES_EVOLUTION_PAR_MOIS`':						
                        $stmt->bindValue($identifier, $this->demandes_recues_evolution_par_mois, PDO::PARAM_INT);
                        break;
                    case '`DEMANDES_TRAITEES`':						
                        $stmt->bindValue($identifier, $this->demandes_traitees, PDO::PARAM_INT);
                        break;
                    case '`DEMANDES_TRAITEES_CUMUL_A_FIN_MOIS`':						
                        $stmt->bindValue($identifier, $this->demandes_traitees_cumul_a_fin_mois, PDO::PARAM_INT);
                        break;
                    case '`DEMANDES_TRAITEES_EVOLUTION_PAR_MOIS`':						
                        $stmt->bindValue($identifier, $this->demandes_traitees_evolution_par_mois, PDO::PARAM_INT);
                        break;
                    case '`DEMANDES_CLOTUREES`':						
                        $stmt->bindValue($identifier, $this->demandes_cloturees, PDO::PARAM_INT);
                        break;
                    case '`DEMANDES_CLOTUREE_CUMUL_A_FIN_MOIS`':						
                        $stmt->bindValue($identifier, $this->demandes_cloturee_cumul_a_fin_mois, PDO::PARAM_INT);
                        break;
                    case '`DEMANDES_CLOTUREE_EVOLUTION_PAR_MOIS`':						
                        $stmt->bindValue($identifier, $this->demandes_cloturee_evolution_par_mois, PDO::PARAM_INT);
                        break;
                    case '`DEMANDES_REPONSES_ENVOYEES`':						
                        $stmt->bindValue($identifier, $this->demandes_reponses_envoyees, PDO::PARAM_INT);
                        break;
                    case '`DEMANDES_REPONSES_ENVOYEES_CUMUL_A_FIN_MOIS`':						
                        $stmt->bindValue($identifier, $this->demandes_reponses_envoyees_cumul_a_fin_mois, PDO::PARAM_INT);
                        break;
                    case '`DEMANDES_REPONSES_ENVOYEES_EVOLUTION_PAR_MOIS`':						
                        $stmt->bindValue($identifier, $this->demandes_reponses_envoyees_evolution_par_mois, PDO::PARAM_INT);
                        break;
                    case '`DEMANDES_HORS_ATTRIBUTION_ERRONEES`':						
                        $stmt->bindValue($identifier, $this->demandes_hors_attribution_erronees, PDO::PARAM_INT);
                        break;
                    case '`DEMANDES_HORS_ATTRIBUTION_ERRONEES_CUMUL_A_FIN_MOIS`':						
                        $stmt->bindValue($identifier, $this->demandes_hors_attribution_erronees_cumul_a_fin_mois, PDO::PARAM_INT);
                        break;
                    case '`DEMANDES_HORS_ATTRIBUTION_ERRONEES_EVOLUTION_PAR_MOIS`':						
                        $stmt->bindValue($identifier, $this->demandes_hors_attribution_erronees_evolution_par_mois, PDO::PARAM_INT);
                        break;
                    case '`DEMANDES_EN_COURS`':						
                        $stmt->bindValue($identifier, $this->demandes_en_cours, PDO::PARAM_INT);
                        break;
                    case '`DEMANDES_EN_COURS_CUMUL_A_FIN_MOIS`':						
                        $stmt->bindValue($identifier, $this->demandes_en_cours_cumul_a_fin_mois, PDO::PARAM_INT);
                        break;
                    case '`DEMANDES_EN_COURS_EVOLUTION_PAR_MOIS`':						
                        $stmt->bindValue($identifier, $this->demandes_en_cours_evolution_par_mois, PDO::PARAM_INT);
                        break;
                    case '`DEMANDES_AFFECTEES_REOUVERTE`':						
                        $stmt->bindValue($identifier, $this->demandes_affectees_reouverte, PDO::PARAM_INT);
                        break;
                    case '`DEMANDES_AFFECTEES_REOUVERTE_CUMUL_A_FIN_MOIS`':						
                        $stmt->bindValue($identifier, $this->demandes_affectees_reouverte_cumul_a_fin_mois, PDO::PARAM_INT);
                        break;
                    case '`DEMANDES_AFFECTEES_REOUVERTE_EVOLUTION_PAR_MOIS`':						
                        $stmt->bindValue($identifier, $this->demandes_affectees_reouverte_evolution_par_mois, PDO::PARAM_INT);
                        break;
                    case '`DEMANDES_EN_PROPOSITION_REPONSE`':						
                        $stmt->bindValue($identifier, $this->demandes_en_proposition_reponse, PDO::PARAM_INT);
                        break;
                    case '`DEMANDES_EN_PROPOSITION_REPONSE_CUMUL_A_FIN_MOIS`':						
                        $stmt->bindValue($identifier, $this->demandes_en_proposition_reponse_cumul_a_fin_mois, PDO::PARAM_INT);
                        break;
                    case '`DEMANDES_EN_PROPOSITION_REPONSE_EVOLUTION_PAR_MOIS`':						
                        $stmt->bindValue($identifier, $this->demandes_en_proposition_reponse_evolution_par_mois, PDO::PARAM_INT);
                        break;
                    case '`DELAI_MOYEN_MOIS`':						
                        $stmt->bindValue($identifier, $this->delai_moyen_mois, PDO::PARAM_INT);
                        break;
                    case '`EVOLUTION_DELAI_MOYEN`':						
                        $stmt->bindValue($identifier, $this->evolution_delai_moyen, PDO::PARAM_INT);
                        break;
                    case '`DELAI_MINIMAL_MOIS`':						
                        $stmt->bindValue($identifier, $this->delai_minimal_mois, PDO::PARAM_INT);
                        break;
                    case '`EVOLUTION_DELAI_MINIMAL`':						
                        $stmt->bindValue($identifier, $this->evolution_delai_minimal, PDO::PARAM_INT);
                        break;
                    case '`DELAI_MAXIMAL`':						
                        $stmt->bindValue($identifier, $this->delai_maximal, PDO::PARAM_INT);
                        break;
                    case '`EVOLUTION_DELAI_MAXIMAL`':						
                        $stmt->bindValue($identifier, $this->evolution_delai_maximal, PDO::PARAM_INT);
                        break;
                    case '`TAUX_REPONSE`':						
                        $stmt->bindValue($identifier, $this->taux_reponse, PDO::PARAM_INT);
                        break;
                    case '`EVOLUTION_TAUX_REPONSE`':						
                        $stmt->bindValue($identifier, $this->evolution_taux_reponse, PDO::PARAM_INT);
                        break;
                    case '`TAUX_SATISFACTION_REQUERANTS`':						
                        $stmt->bindValue($identifier, $this->taux_satisfaction_requerants, PDO::PARAM_INT);
                        break;
                    case '`EVOLUTION_TAUX_SATISFACTION`':						
                        $stmt->bindValue($identifier, $this->evolution_taux_satisfaction, PDO::PARAM_INT);
                        break;
                    case '`CUMUL_TAUX_SATISFACTION`':						
                        $stmt->bindValue($identifier, $this->cumul_taux_satisfaction, PDO::PARAM_INT);
                        break;
                    case '`DEMANDES_ASSISTANCE_INTERNE`':						
                        $stmt->bindValue($identifier, $this->demandes_assistance_interne, PDO::PARAM_INT);
                        break;
                    case '`EVOLUTION_DEMANDE_INTERNE`':						
                        $stmt->bindValue($identifier, $this->evolution_demande_interne, PDO::PARAM_INT);
                        break;
                    case '`CUMUL_DEMANDE_INTERNE`':						
                        $stmt->bindValue($identifier, $this->cumul_demande_interne, PDO::PARAM_INT);
                        break;
                    case '`DATE_MISE_A_JOUR`':						
                        $stmt->bindValue($identifier, $this->date_mise_a_jour, PDO::PARAM_STR);
                        break;
                    case '`ID_ENTITE`':						
                        $stmt->bindValue($identifier, $this->id_entite, PDO::PARAM_INT);
                        break;
                }
            }
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute INSERT statement [%s]', $sql), $e);
        }

        try {
            $pk = $con->lastInsertId();
        } catch (Exception $e) {
            throw new PropelException('Unable to get autoincrement id.', $e);
        }
        $this->setIdStatistique($pk);

        $this->setNew(false);
    }

    /**
     * Update the row in the database.
     *
     * @param PropelPDO $con
     *
     * @see        doSave()
     */
    protected function doUpdate(PropelPDO $con)
    {
        $selectCriteria = $this->buildPkeyCriteria();
        $valuesCriteria = $this->buildCriteria();
        BasePeer::doUpdate($selectCriteria, $valuesCriteria, $con);
    }

    /**
     * Array of ValidationFailed objects.
     * @var        array ValidationFailed[]
     */
    protected $validationFailures = array();

    /**
     * Gets any ValidationFailed objects that resulted from last call to validate().
     *
     *
     * @return array ValidationFailed[]
     * @see        validate()
     */
    public function getValidationFailures()
    {
        return $this->validationFailures;
    }

    /**
     * Validates the objects modified field values and all objects related to this table.
     *
     * If $columns is either a column name or an array of column names
     * only those columns are validated.
     *
     * @param mixed $columns Column name or an array of column names.
     * @return boolean Whether all columns pass validation.
     * @see        doValidate()
     * @see        getValidationFailures()
     */
    public function validate($columns = null)
    {
        $res = $this->doValidate($columns);
        if ($res === true) {
            $this->validationFailures = array();

            return true;
        }

        $this->validationFailures = $res;

        return false;
    }

    /**
     * This function performs the validation work for complex object models.
     *
     * In addition to checking the current object, all related objects will
     * also be validated.  If all pass then <code>true</code> is returned; otherwise
     * an aggregated array of ValidationFailed objects will be returned.
     *
     * @param array $columns Array of column names to validate.
     * @return mixed <code>true</code> if all validations pass; array of <code>ValidationFailed</code> objects otherwise.
     */
    protected function doValidate($columns = null)
    {
        if (!$this->alreadyInValidation) {
            $this->alreadyInValidation = true;
            $retval = null;

            $failureMap = array();


            if (($retval = StatistiquesPeer::doValidate($this, $columns)) !== true) {
                $failureMap = array_merge($failureMap, $retval);
            }



            $this->alreadyInValidation = false;
        }

        return (!empty($failureMap) ? $failureMap : true);
    }

    /**
     * Retrieves a field from the object by name passed in as a string.
     *
     * @param string $name name
     * @param string $type The type of fieldname the $name is of:
     *               one of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME
     *               BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM.
     *               Defaults to BasePeer::TYPE_PHPNAME
     * @return mixed Value of field.
     */
    public function getByName($name, $type = BasePeer::TYPE_PHPNAME)
    {
        $pos = StatistiquesPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
        $field = $this->getByPosition($pos);

        return $field;
    }

    /**
     * Retrieves a field from the object by Position as specified in the xml schema.
     * Zero-based.
     *
     * @param int $pos position in xml schema
     * @return mixed Value of field at $pos
     */
    public function getByPosition($pos)
    {
        switch ($pos) {
            case 0:
                return $this->getIdStatistique();
                break;
            case 1:
                return $this->getAnnee();
                break;
            case 2:
                return $this->getMois();
                break;
            case 3:
                return $this->getDemandesRecues();
                break;
            case 4:
                return $this->getDemandesRecuesCumulAFinMois();
                break;
            case 5:
                return $this->getDemandesRecuesEvolutionParMois();
                break;
            case 6:
                return $this->getDemandesTraitees();
                break;
            case 7:
                return $this->getDemandesTraiteesCumulAFinMois();
                break;
            case 8:
                return $this->getDemandesTraiteesEvolutionParMois();
                break;
            case 9:
                return $this->getDemandesCloturees();
                break;
            case 10:
                return $this->getDemandesClotureeCumulAFinMois();
                break;
            case 11:
                return $this->getDemandesClotureeEvolutionParMois();
                break;
            case 12:
                return $this->getDemandesReponsesEnvoyees();
                break;
            case 13:
                return $this->getDemandesReponsesEnvoyeesCumulAFinMois();
                break;
            case 14:
                return $this->getDemandesReponsesEnvoyeesEvolutionParMois();
                break;
            case 15:
                return $this->getDemandesHorsAttributionErronees();
                break;
            case 16:
                return $this->getDemandesHorsAttributionErroneesCumulAFinMois();
                break;
            case 17:
                return $this->getDemandesHorsAttributionErroneesEvolutionParMois();
                break;
            case 18:
                return $this->getDemandesEnCours();
                break;
            case 19:
                return $this->getDemandesEnCoursCumulAFinMois();
                break;
            case 20:
                return $this->getDemandesEnCoursEvolutionParMois();
                break;
            case 21:
                return $this->getDemandesAffecteesReouverte();
                break;
            case 22:
                return $this->getDemandesAffecteesReouverteCumulAFinMois();
                break;
            case 23:
                return $this->getDemandesAffecteesReouverteEvolutionParMois();
                break;
            case 24:
                return $this->getDemandesEnPropositionReponse();
                break;
            case 25:
                return $this->getDemandesEnPropositionReponseCumulAFinMois();
                break;
            case 26:
                return $this->getDemandesEnPropositionReponseEvolutionParMois();
                break;
            case 27:
                return $this->getDelaiMoyenMois();
                break;
            case 28:
                return $this->getEvolutionDelaiMoyen();
                break;
            case 29:
                return $this->getDelaiMinimalMois();
                break;
            case 30:
                return $this->getEvolutionDelaiMinimal();
                break;
            case 31:
                return $this->getDelaiMaximal();
                break;
            case 32:
                return $this->getEvolutionDelaiMaximal();
                break;
            case 33:
                return $this->getTauxReponse();
                break;
            case 34:
                return $this->getEvolutionTauxReponse();
                break;
            case 35:
                return $this->getTauxSatisfactionRequerants();
                break;
            case 36:
                return $this->getEvolutionTauxSatisfaction();
                break;
            case 37:
                return $this->getCumulTauxSatisfaction();
                break;
            case 38:
                return $this->getDemandesAssistanceInterne();
                break;
            case 39:
                return $this->getEvolutionDemandeInterne();
                break;
            case 40:
                return $this->getCumulDemandeInterne();
                break;
            case 41:
                return $this->getDateMiseAJour();
                break;
            case 42:
                return $this->getIdEntite();
                break;
            default:
                return null;
                break;
        } // switch()
    }

    /**
     * Exports the object as an array.
     *
     * You can specify the key type of the array by passing one of the class
     * type constants.
     *
     * @param     string  $keyType (optional) One of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME,
     *                    BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM.
     *                    Defaults to BasePeer::TYPE_PHPNAME.
     * @param     boolean $includeLazyLoadColumns (optional) Whether to include lazy loaded columns. Defaults to true.
     * @param     array $alreadyDumpedObjects List of objects to skip to avoid recursion
     *
     * @return array an associative array containing the field names (as keys) and field values
     */
    public function toArray($keyType = BasePeer::TYPE_PHPNAME, $includeLazyLoadColumns = true, $alreadyDumpedObjects = array())
    {
        if (isset($alreadyDumpedObjects['Statistiques'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['Statistiques'][$this->getPrimaryKey()] = true;
        $keys = StatistiquesPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getIdStatistique(),
            $keys[1] => $this->getAnnee(),
            $keys[2] => $this->getMois(),
            $keys[3] => $this->getDemandesRecues(),
            $keys[4] => $this->getDemandesRecuesCumulAFinMois(),
            $keys[5] => $this->getDemandesRecuesEvolutionParMois(),
            $keys[6] => $this->getDemandesTraitees(),
            $keys[7] => $this->getDemandesTraiteesCumulAFinMois(),
            $keys[8] => $this->getDemandesTraiteesEvolutionParMois(),
            $keys[9] => $this->getDemandesCloturees(),
            $keys[10] => $this->getDemandesClotureeCumulAFinMois(),
            $keys[11] => $this->getDemandesClotureeEvolutionParMois(),
            $keys[12] => $this->getDemandesReponsesEnvoyees(),
            $keys[13] => $this->getDemandesReponsesEnvoyeesCumulAFinMois(),
            $keys[14] => $this->getDemandesReponsesEnvoyeesEvolutionParMois(),
            $keys[15] => $this->getDemandesHorsAttributionErronees(),
            $keys[16] => $this->getDemandesHorsAttributionErroneesCumulAFinMois(),
            $keys[17] => $this->getDemandesHorsAttributionErroneesEvolutionParMois(),
            $keys[18] => $this->getDemandesEnCours(),
            $keys[19] => $this->getDemandesEnCoursCumulAFinMois(),
            $keys[20] => $this->getDemandesEnCoursEvolutionParMois(),
            $keys[21] => $this->getDemandesAffecteesReouverte(),
            $keys[22] => $this->getDemandesAffecteesReouverteCumulAFinMois(),
            $keys[23] => $this->getDemandesAffecteesReouverteEvolutionParMois(),
            $keys[24] => $this->getDemandesEnPropositionReponse(),
            $keys[25] => $this->getDemandesEnPropositionReponseCumulAFinMois(),
            $keys[26] => $this->getDemandesEnPropositionReponseEvolutionParMois(),
            $keys[27] => $this->getDelaiMoyenMois(),
            $keys[28] => $this->getEvolutionDelaiMoyen(),
            $keys[29] => $this->getDelaiMinimalMois(),
            $keys[30] => $this->getEvolutionDelaiMinimal(),
            $keys[31] => $this->getDelaiMaximal(),
            $keys[32] => $this->getEvolutionDelaiMaximal(),
            $keys[33] => $this->getTauxReponse(),
            $keys[34] => $this->getEvolutionTauxReponse(),
            $keys[35] => $this->getTauxSatisfactionRequerants(),
            $keys[36] => $this->getEvolutionTauxSatisfaction(),
            $keys[37] => $this->getCumulTauxSatisfaction(),
            $keys[38] => $this->getDemandesAssistanceInterne(),
            $keys[39] => $this->getEvolutionDemandeInterne(),
            $keys[40] => $this->getCumulDemandeInterne(),
            $keys[41] => $this->getDateMiseAJour(),
            $keys[42] => $this->getIdEntite(),
        );

        return $result;
    }

    /**
     * Sets a field from the object by name passed in as a string.
     *
     * @param string $name peer name
     * @param mixed $value field value
     * @param string $type The type of fieldname the $name is of:
     *                     one of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME
     *                     BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM.
     *                     Defaults to BasePeer::TYPE_PHPNAME
     * @return void
     */
    public function setByName($name, $value, $type = BasePeer::TYPE_PHPNAME)
    {
        $pos = StatistiquesPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

        $this->setByPosition($pos, $value);
    }

    /**
     * Sets a field from the object by Position as specified in the xml schema.
     * Zero-based.
     *
     * @param int $pos position in xml schema
     * @param mixed $value field value
     * @return void
     */
    public function setByPosition($pos, $value)
    {
        switch ($pos) {
            case 0:
                $this->setIdStatistique($value);
                break;
            case 1:
                $this->setAnnee($value);
                break;
            case 2:
                $this->setMois($value);
                break;
            case 3:
                $this->setDemandesRecues($value);
                break;
            case 4:
                $this->setDemandesRecuesCumulAFinMois($value);
                break;
            case 5:
                $this->setDemandesRecuesEvolutionParMois($value);
                break;
            case 6:
                $this->setDemandesTraitees($value);
                break;
            case 7:
                $this->setDemandesTraiteesCumulAFinMois($value);
                break;
            case 8:
                $this->setDemandesTraiteesEvolutionParMois($value);
                break;
            case 9:
                $this->setDemandesCloturees($value);
                break;
            case 10:
                $this->setDemandesClotureeCumulAFinMois($value);
                break;
            case 11:
                $this->setDemandesClotureeEvolutionParMois($value);
                break;
            case 12:
                $this->setDemandesReponsesEnvoyees($value);
                break;
            case 13:
                $this->setDemandesReponsesEnvoyeesCumulAFinMois($value);
                break;
            case 14:
                $this->setDemandesReponsesEnvoyeesEvolutionParMois($value);
                break;
            case 15:
                $this->setDemandesHorsAttributionErronees($value);
                break;
            case 16:
                $this->setDemandesHorsAttributionErroneesCumulAFinMois($value);
                break;
            case 17:
                $this->setDemandesHorsAttributionErroneesEvolutionParMois($value);
                break;
            case 18:
                $this->setDemandesEnCours($value);
                break;
            case 19:
                $this->setDemandesEnCoursCumulAFinMois($value);
                break;
            case 20:
                $this->setDemandesEnCoursEvolutionParMois($value);
                break;
            case 21:
                $this->setDemandesAffecteesReouverte($value);
                break;
            case 22:
                $this->setDemandesAffecteesReouverteCumulAFinMois($value);
                break;
            case 23:
                $this->setDemandesAffecteesReouverteEvolutionParMois($value);
                break;
            case 24:
                $this->setDemandesEnPropositionReponse($value);
                break;
            case 25:
                $this->setDemandesEnPropositionReponseCumulAFinMois($value);
                break;
            case 26:
                $this->setDemandesEnPropositionReponseEvolutionParMois($value);
                break;
            case 27:
                $this->setDelaiMoyenMois($value);
                break;
            case 28:
                $this->setEvolutionDelaiMoyen($value);
                break;
            case 29:
                $this->setDelaiMinimalMois($value);
                break;
            case 30:
                $this->setEvolutionDelaiMinimal($value);
                break;
            case 31:
                $this->setDelaiMaximal($value);
                break;
            case 32:
                $this->setEvolutionDelaiMaximal($value);
                break;
            case 33:
                $this->setTauxReponse($value);
                break;
            case 34:
                $this->setEvolutionTauxReponse($value);
                break;
            case 35:
                $this->setTauxSatisfactionRequerants($value);
                break;
            case 36:
                $this->setEvolutionTauxSatisfaction($value);
                break;
            case 37:
                $this->setCumulTauxSatisfaction($value);
                break;
            case 38:
                $this->setDemandesAssistanceInterne($value);
                break;
            case 39:
                $this->setEvolutionDemandeInterne($value);
                break;
            case 40:
                $this->setCumulDemandeInterne($value);
                break;
            case 41:
                $this->setDateMiseAJour($value);
                break;
            case 42:
                $this->setIdEntite($value);
                break;
        } // switch()
    }

    /**
     * Populates the object using an array.
     *
     * This is particularly useful when populating an object from one of the
     * request arrays (e.g. $_POST).  This method goes through the column
     * names, checking to see whether a matching key exists in populated
     * array. If so the setByName() method is called for that column.
     *
     * You can specify the key type of the array by additionally passing one
     * of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME,
     * BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM.
     * The default key type is the column's BasePeer::TYPE_PHPNAME
     *
     * @param array  $arr     An array to populate the object from.
     * @param string $keyType The type of keys the array uses.
     * @return void
     */
    public function fromArray($arr, $keyType = BasePeer::TYPE_PHPNAME)
    {
        $keys = StatistiquesPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setIdStatistique($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setAnnee($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setMois($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setDemandesRecues($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setDemandesRecuesCumulAFinMois($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setDemandesRecuesEvolutionParMois($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setDemandesTraitees($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setDemandesTraiteesCumulAFinMois($arr[$keys[7]]);
        if (array_key_exists($keys[8], $arr)) $this->setDemandesTraiteesEvolutionParMois($arr[$keys[8]]);
        if (array_key_exists($keys[9], $arr)) $this->setDemandesCloturees($arr[$keys[9]]);
        if (array_key_exists($keys[10], $arr)) $this->setDemandesClotureeCumulAFinMois($arr[$keys[10]]);
        if (array_key_exists($keys[11], $arr)) $this->setDemandesClotureeEvolutionParMois($arr[$keys[11]]);
        if (array_key_exists($keys[12], $arr)) $this->setDemandesReponsesEnvoyees($arr[$keys[12]]);
        if (array_key_exists($keys[13], $arr)) $this->setDemandesReponsesEnvoyeesCumulAFinMois($arr[$keys[13]]);
        if (array_key_exists($keys[14], $arr)) $this->setDemandesReponsesEnvoyeesEvolutionParMois($arr[$keys[14]]);
        if (array_key_exists($keys[15], $arr)) $this->setDemandesHorsAttributionErronees($arr[$keys[15]]);
        if (array_key_exists($keys[16], $arr)) $this->setDemandesHorsAttributionErroneesCumulAFinMois($arr[$keys[16]]);
        if (array_key_exists($keys[17], $arr)) $this->setDemandesHorsAttributionErroneesEvolutionParMois($arr[$keys[17]]);
        if (array_key_exists($keys[18], $arr)) $this->setDemandesEnCours($arr[$keys[18]]);
        if (array_key_exists($keys[19], $arr)) $this->setDemandesEnCoursCumulAFinMois($arr[$keys[19]]);
        if (array_key_exists($keys[20], $arr)) $this->setDemandesEnCoursEvolutionParMois($arr[$keys[20]]);
        if (array_key_exists($keys[21], $arr)) $this->setDemandesAffecteesReouverte($arr[$keys[21]]);
        if (array_key_exists($keys[22], $arr)) $this->setDemandesAffecteesReouverteCumulAFinMois($arr[$keys[22]]);
        if (array_key_exists($keys[23], $arr)) $this->setDemandesAffecteesReouverteEvolutionParMois($arr[$keys[23]]);
        if (array_key_exists($keys[24], $arr)) $this->setDemandesEnPropositionReponse($arr[$keys[24]]);
        if (array_key_exists($keys[25], $arr)) $this->setDemandesEnPropositionReponseCumulAFinMois($arr[$keys[25]]);
        if (array_key_exists($keys[26], $arr)) $this->setDemandesEnPropositionReponseEvolutionParMois($arr[$keys[26]]);
        if (array_key_exists($keys[27], $arr)) $this->setDelaiMoyenMois($arr[$keys[27]]);
        if (array_key_exists($keys[28], $arr)) $this->setEvolutionDelaiMoyen($arr[$keys[28]]);
        if (array_key_exists($keys[29], $arr)) $this->setDelaiMinimalMois($arr[$keys[29]]);
        if (array_key_exists($keys[30], $arr)) $this->setEvolutionDelaiMinimal($arr[$keys[30]]);
        if (array_key_exists($keys[31], $arr)) $this->setDelaiMaximal($arr[$keys[31]]);
        if (array_key_exists($keys[32], $arr)) $this->setEvolutionDelaiMaximal($arr[$keys[32]]);
        if (array_key_exists($keys[33], $arr)) $this->setTauxReponse($arr[$keys[33]]);
        if (array_key_exists($keys[34], $arr)) $this->setEvolutionTauxReponse($arr[$keys[34]]);
        if (array_key_exists($keys[35], $arr)) $this->setTauxSatisfactionRequerants($arr[$keys[35]]);
        if (array_key_exists($keys[36], $arr)) $this->setEvolutionTauxSatisfaction($arr[$keys[36]]);
        if (array_key_exists($keys[37], $arr)) $this->setCumulTauxSatisfaction($arr[$keys[37]]);
        if (array_key_exists($keys[38], $arr)) $this->setDemandesAssistanceInterne($arr[$keys[38]]);
        if (array_key_exists($keys[39], $arr)) $this->setEvolutionDemandeInterne($arr[$keys[39]]);
        if (array_key_exists($keys[40], $arr)) $this->setCumulDemandeInterne($arr[$keys[40]]);
        if (array_key_exists($keys[41], $arr)) $this->setDateMiseAJour($arr[$keys[41]]);
        if (array_key_exists($keys[42], $arr)) $this->setIdEntite($arr[$keys[42]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(StatistiquesPeer::DATABASE_NAME);

        if ($this->isColumnModified(StatistiquesPeer::ID_STATISTIQUE)) $criteria->add(StatistiquesPeer::ID_STATISTIQUE, $this->id_statistique);
        if ($this->isColumnModified(StatistiquesPeer::ANNEE)) $criteria->add(StatistiquesPeer::ANNEE, $this->annee);
        if ($this->isColumnModified(StatistiquesPeer::MOIS)) $criteria->add(StatistiquesPeer::MOIS, $this->mois);
        if ($this->isColumnModified(StatistiquesPeer::DEMANDES_RECUES)) $criteria->add(StatistiquesPeer::DEMANDES_RECUES, $this->demandes_recues);
        if ($this->isColumnModified(StatistiquesPeer::DEMANDES_RECUES_CUMUL_A_FIN_MOIS)) $criteria->add(StatistiquesPeer::DEMANDES_RECUES_CUMUL_A_FIN_MOIS, $this->demandes_recues_cumul_a_fin_mois);
        if ($this->isColumnModified(StatistiquesPeer::DEMANDES_RECUES_EVOLUTION_PAR_MOIS)) $criteria->add(StatistiquesPeer::DEMANDES_RECUES_EVOLUTION_PAR_MOIS, $this->demandes_recues_evolution_par_mois);
        if ($this->isColumnModified(StatistiquesPeer::DEMANDES_TRAITEES)) $criteria->add(StatistiquesPeer::DEMANDES_TRAITEES, $this->demandes_traitees);
        if ($this->isColumnModified(StatistiquesPeer::DEMANDES_TRAITEES_CUMUL_A_FIN_MOIS)) $criteria->add(StatistiquesPeer::DEMANDES_TRAITEES_CUMUL_A_FIN_MOIS, $this->demandes_traitees_cumul_a_fin_mois);
        if ($this->isColumnModified(StatistiquesPeer::DEMANDES_TRAITEES_EVOLUTION_PAR_MOIS)) $criteria->add(StatistiquesPeer::DEMANDES_TRAITEES_EVOLUTION_PAR_MOIS, $this->demandes_traitees_evolution_par_mois);
        if ($this->isColumnModified(StatistiquesPeer::DEMANDES_CLOTUREES)) $criteria->add(StatistiquesPeer::DEMANDES_CLOTUREES, $this->demandes_cloturees);
        if ($this->isColumnModified(StatistiquesPeer::DEMANDES_CLOTUREE_CUMUL_A_FIN_MOIS)) $criteria->add(StatistiquesPeer::DEMANDES_CLOTUREE_CUMUL_A_FIN_MOIS, $this->demandes_cloturee_cumul_a_fin_mois);
        if ($this->isColumnModified(StatistiquesPeer::DEMANDES_CLOTUREE_EVOLUTION_PAR_MOIS)) $criteria->add(StatistiquesPeer::DEMANDES_CLOTUREE_EVOLUTION_PAR_MOIS, $this->demandes_cloturee_evolution_par_mois);
        if ($this->isColumnModified(StatistiquesPeer::DEMANDES_REPONSES_ENVOYEES)) $criteria->add(StatistiquesPeer::DEMANDES_REPONSES_ENVOYEES, $this->demandes_reponses_envoyees);
        if ($this->isColumnModified(StatistiquesPeer::DEMANDES_REPONSES_ENVOYEES_CUMUL_A_FIN_MOIS)) $criteria->add(StatistiquesPeer::DEMANDES_REPONSES_ENVOYEES_CUMUL_A_FIN_MOIS, $this->demandes_reponses_envoyees_cumul_a_fin_mois);
        if ($this->isColumnModified(StatistiquesPeer::DEMANDES_REPONSES_ENVOYEES_EVOLUTION_PAR_MOIS)) $criteria->add(StatistiquesPeer::DEMANDES_REPONSES_ENVOYEES_EVOLUTION_PAR_MOIS, $this->demandes_reponses_envoyees_evolution_par_mois);
        if ($this->isColumnModified(StatistiquesPeer::DEMANDES_HORS_ATTRIBUTION_ERRONEES)) $criteria->add(StatistiquesPeer::DEMANDES_HORS_ATTRIBUTION_ERRONEES, $this->demandes_hors_attribution_erronees);
        if ($this->isColumnModified(StatistiquesPeer::DEMANDES_HORS_ATTRIBUTION_ERRONEES_CUMUL_A_FIN_MOIS)) $criteria->add(StatistiquesPeer::DEMANDES_HORS_ATTRIBUTION_ERRONEES_CUMUL_A_FIN_MOIS, $this->demandes_hors_attribution_erronees_cumul_a_fin_mois);
        if ($this->isColumnModified(StatistiquesPeer::DEMANDES_HORS_ATTRIBUTION_ERRONEES_EVOLUTION_PAR_MOIS)) $criteria->add(StatistiquesPeer::DEMANDES_HORS_ATTRIBUTION_ERRONEES_EVOLUTION_PAR_MOIS, $this->demandes_hors_attribution_erronees_evolution_par_mois);
        if ($this->isColumnModified(StatistiquesPeer::DEMANDES_EN_COURS)) $criteria->add(StatistiquesPeer::DEMANDES_EN_COURS, $this->demandes_en_cours);
        if ($this->isColumnModified(StatistiquesPeer::DEMANDES_EN_COURS_CUMUL_A_FIN_MOIS)) $criteria->add(StatistiquesPeer::DEMANDES_EN_COURS_CUMUL_A_FIN_MOIS, $this->demandes_en_cours_cumul_a_fin_mois);
        if ($this->isColumnModified(StatistiquesPeer::DEMANDES_EN_COURS_EVOLUTION_PAR_MOIS)) $criteria->add(StatistiquesPeer::DEMANDES_EN_COURS_EVOLUTION_PAR_MOIS, $this->demandes_en_cours_evolution_par_mois);
        if ($this->isColumnModified(StatistiquesPeer::DEMANDES_AFFECTEES_REOUVERTE)) $criteria->add(StatistiquesPeer::DEMANDES_AFFECTEES_REOUVERTE, $this->demandes_affectees_reouverte);
        if ($this->isColumnModified(StatistiquesPeer::DEMANDES_AFFECTEES_REOUVERTE_CUMUL_A_FIN_MOIS)) $criteria->add(StatistiquesPeer::DEMANDES_AFFECTEES_REOUVERTE_CUMUL_A_FIN_MOIS, $this->demandes_affectees_reouverte_cumul_a_fin_mois);
        if ($this->isColumnModified(StatistiquesPeer::DEMANDES_AFFECTEES_REOUVERTE_EVOLUTION_PAR_MOIS)) $criteria->add(StatistiquesPeer::DEMANDES_AFFECTEES_REOUVERTE_EVOLUTION_PAR_MOIS, $this->demandes_affectees_reouverte_evolution_par_mois);
        if ($this->isColumnModified(StatistiquesPeer::DEMANDES_EN_PROPOSITION_REPONSE)) $criteria->add(StatistiquesPeer::DEMANDES_EN_PROPOSITION_REPONSE, $this->demandes_en_proposition_reponse);
        if ($this->isColumnModified(StatistiquesPeer::DEMANDES_EN_PROPOSITION_REPONSE_CUMUL_A_FIN_MOIS)) $criteria->add(StatistiquesPeer::DEMANDES_EN_PROPOSITION_REPONSE_CUMUL_A_FIN_MOIS, $this->demandes_en_proposition_reponse_cumul_a_fin_mois);
        if ($this->isColumnModified(StatistiquesPeer::DEMANDES_EN_PROPOSITION_REPONSE_EVOLUTION_PAR_MOIS)) $criteria->add(StatistiquesPeer::DEMANDES_EN_PROPOSITION_REPONSE_EVOLUTION_PAR_MOIS, $this->demandes_en_proposition_reponse_evolution_par_mois);
        if ($this->isColumnModified(StatistiquesPeer::DELAI_MOYEN_MOIS)) $criteria->add(StatistiquesPeer::DELAI_MOYEN_MOIS, $this->delai_moyen_mois);
        if ($this->isColumnModified(StatistiquesPeer::EVOLUTION_DELAI_MOYEN)) $criteria->add(StatistiquesPeer::EVOLUTION_DELAI_MOYEN, $this->evolution_delai_moyen);
        if ($this->isColumnModified(StatistiquesPeer::DELAI_MINIMAL_MOIS)) $criteria->add(StatistiquesPeer::DELAI_MINIMAL_MOIS, $this->delai_minimal_mois);
        if ($this->isColumnModified(StatistiquesPeer::EVOLUTION_DELAI_MINIMAL)) $criteria->add(StatistiquesPeer::EVOLUTION_DELAI_MINIMAL, $this->evolution_delai_minimal);
        if ($this->isColumnModified(StatistiquesPeer::DELAI_MAXIMAL)) $criteria->add(StatistiquesPeer::DELAI_MAXIMAL, $this->delai_maximal);
        if ($this->isColumnModified(StatistiquesPeer::EVOLUTION_DELAI_MAXIMAL)) $criteria->add(StatistiquesPeer::EVOLUTION_DELAI_MAXIMAL, $this->evolution_delai_maximal);
        if ($this->isColumnModified(StatistiquesPeer::TAUX_REPONSE)) $criteria->add(StatistiquesPeer::TAUX_REPONSE, $this->taux_reponse);
        if ($this->isColumnModified(StatistiquesPeer::EVOLUTION_TAUX_REPONSE)) $criteria->add(StatistiquesPeer::EVOLUTION_TAUX_REPONSE, $this->evolution_taux_reponse);
        if ($this->isColumnModified(StatistiquesPeer::TAUX_SATISFACTION_REQUERANTS)) $criteria->add(StatistiquesPeer::TAUX_SATISFACTION_REQUERANTS, $this->taux_satisfaction_requerants);
        if ($this->isColumnModified(StatistiquesPeer::EVOLUTION_TAUX_SATISFACTION)) $criteria->add(StatistiquesPeer::EVOLUTION_TAUX_SATISFACTION, $this->evolution_taux_satisfaction);
        if ($this->isColumnModified(StatistiquesPeer::CUMUL_TAUX_SATISFACTION)) $criteria->add(StatistiquesPeer::CUMUL_TAUX_SATISFACTION, $this->cumul_taux_satisfaction);
        if ($this->isColumnModified(StatistiquesPeer::DEMANDES_ASSISTANCE_INTERNE)) $criteria->add(StatistiquesPeer::DEMANDES_ASSISTANCE_INTERNE, $this->demandes_assistance_interne);
        if ($this->isColumnModified(StatistiquesPeer::EVOLUTION_DEMANDE_INTERNE)) $criteria->add(StatistiquesPeer::EVOLUTION_DEMANDE_INTERNE, $this->evolution_demande_interne);
        if ($this->isColumnModified(StatistiquesPeer::CUMUL_DEMANDE_INTERNE)) $criteria->add(StatistiquesPeer::CUMUL_DEMANDE_INTERNE, $this->cumul_demande_interne);
        if ($this->isColumnModified(StatistiquesPeer::DATE_MISE_A_JOUR)) $criteria->add(StatistiquesPeer::DATE_MISE_A_JOUR, $this->date_mise_a_jour);
        if ($this->isColumnModified(StatistiquesPeer::ID_ENTITE)) $criteria->add(StatistiquesPeer::ID_ENTITE, $this->id_entite);

        return $criteria;
    }

    /**
     * Builds a Criteria object containing the primary key for this object.
     *
     * Unlike buildCriteria() this method includes the primary key values regardless
     * of whether or not they have been modified.
     *
     * @return Criteria The Criteria object containing value(s) for primary key(s).
     */
    public function buildPkeyCriteria()
    {
        $criteria = new Criteria(StatistiquesPeer::DATABASE_NAME);
        $criteria->add(StatistiquesPeer::ID_STATISTIQUE, $this->id_statistique);

        return $criteria;
    }

    /**
     * Returns the primary key for this object (row).
     * @return int
     */
    public function getPrimaryKey()
    {
        return $this->getIdStatistique();
    }

    /**
     * Generic method to set the primary key (id_statistique column).
     *
     * @param  int $key Primary key.
     * @return void
     */
    public function setPrimaryKey($key)
    {
        $this->setIdStatistique($key);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {

        return null === $this->getIdStatistique();
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param object $copyObj An object of Statistiques (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setAnnee($this->getAnnee());
        $copyObj->setMois($this->getMois());
        $copyObj->setDemandesRecues($this->getDemandesRecues());
        $copyObj->setDemandesRecuesCumulAFinMois($this->getDemandesRecuesCumulAFinMois());
        $copyObj->setDemandesRecuesEvolutionParMois($this->getDemandesRecuesEvolutionParMois());
        $copyObj->setDemandesTraitees($this->getDemandesTraitees());
        $copyObj->setDemandesTraiteesCumulAFinMois($this->getDemandesTraiteesCumulAFinMois());
        $copyObj->setDemandesTraiteesEvolutionParMois($this->getDemandesTraiteesEvolutionParMois());
        $copyObj->setDemandesCloturees($this->getDemandesCloturees());
        $copyObj->setDemandesClotureeCumulAFinMois($this->getDemandesClotureeCumulAFinMois());
        $copyObj->setDemandesClotureeEvolutionParMois($this->getDemandesClotureeEvolutionParMois());
        $copyObj->setDemandesReponsesEnvoyees($this->getDemandesReponsesEnvoyees());
        $copyObj->setDemandesReponsesEnvoyeesCumulAFinMois($this->getDemandesReponsesEnvoyeesCumulAFinMois());
        $copyObj->setDemandesReponsesEnvoyeesEvolutionParMois($this->getDemandesReponsesEnvoyeesEvolutionParMois());
        $copyObj->setDemandesHorsAttributionErronees($this->getDemandesHorsAttributionErronees());
        $copyObj->setDemandesHorsAttributionErroneesCumulAFinMois($this->getDemandesHorsAttributionErroneesCumulAFinMois());
        $copyObj->setDemandesHorsAttributionErroneesEvolutionParMois($this->getDemandesHorsAttributionErroneesEvolutionParMois());
        $copyObj->setDemandesEnCours($this->getDemandesEnCours());
        $copyObj->setDemandesEnCoursCumulAFinMois($this->getDemandesEnCoursCumulAFinMois());
        $copyObj->setDemandesEnCoursEvolutionParMois($this->getDemandesEnCoursEvolutionParMois());
        $copyObj->setDemandesAffecteesReouverte($this->getDemandesAffecteesReouverte());
        $copyObj->setDemandesAffecteesReouverteCumulAFinMois($this->getDemandesAffecteesReouverteCumulAFinMois());
        $copyObj->setDemandesAffecteesReouverteEvolutionParMois($this->getDemandesAffecteesReouverteEvolutionParMois());
        $copyObj->setDemandesEnPropositionReponse($this->getDemandesEnPropositionReponse());
        $copyObj->setDemandesEnPropositionReponseCumulAFinMois($this->getDemandesEnPropositionReponseCumulAFinMois());
        $copyObj->setDemandesEnPropositionReponseEvolutionParMois($this->getDemandesEnPropositionReponseEvolutionParMois());
        $copyObj->setDelaiMoyenMois($this->getDelaiMoyenMois());
        $copyObj->setEvolutionDelaiMoyen($this->getEvolutionDelaiMoyen());
        $copyObj->setDelaiMinimalMois($this->getDelaiMinimalMois());
        $copyObj->setEvolutionDelaiMinimal($this->getEvolutionDelaiMinimal());
        $copyObj->setDelaiMaximal($this->getDelaiMaximal());
        $copyObj->setEvolutionDelaiMaximal($this->getEvolutionDelaiMaximal());
        $copyObj->setTauxReponse($this->getTauxReponse());
        $copyObj->setEvolutionTauxReponse($this->getEvolutionTauxReponse());
        $copyObj->setTauxSatisfactionRequerants($this->getTauxSatisfactionRequerants());
        $copyObj->setEvolutionTauxSatisfaction($this->getEvolutionTauxSatisfaction());
        $copyObj->setCumulTauxSatisfaction($this->getCumulTauxSatisfaction());
        $copyObj->setDemandesAssistanceInterne($this->getDemandesAssistanceInterne());
        $copyObj->setEvolutionDemandeInterne($this->getEvolutionDemandeInterne());
        $copyObj->setCumulDemandeInterne($this->getCumulDemandeInterne());
        $copyObj->setDateMiseAJour($this->getDateMiseAJour());
        $copyObj->setIdEntite($this->getIdEntite());
        if ($makeNew) {
            $copyObj->setNew(true);
            $copyObj->setIdStatistique(NULL); // this is a auto-increment column, so set to default value
        }
    }

    /**
     * Makes a copy of this object that will be inserted as a new row in table when saved.
     * It creates a new object filling in the simple attributes, but skipping any primary
     * keys that are defined for the table.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @return Statistiques Clone of current object.
     * @throws PropelException
     */
    public function copy($deepCopy = false)
    {
        // we use get_class(), because this might be a subclass
        $clazz = get_class($this);
        $copyObj = new $clazz();
        $this->copyInto($copyObj, $deepCopy);

        return $copyObj;
    }

    /**
     * Returns a peer instance associated with this om.
     *
     * Since Peer classes are not to have any instance attributes, this method returns the
     * same instance for all member of this class. The method could therefore
     * be static, but this would prevent one from overriding the behavior.
     *
     * @return StatistiquesPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new StatistiquesPeer();
        }

        return self::$peer;
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->id_statistique = null;
        $this->annee = null;
        $this->mois = null;
        $this->demandes_recues = null;
        $this->demandes_recues_cumul_a_fin_mois = null;
        $this->demandes_recues_evolution_par_mois = null;
        $this->demandes_traitees = null;
        $this->demandes_traitees_cumul_a_fin_mois = null;
        $this->demandes_traitees_evolution_par_mois = null;
        $this->demandes_cloturees = null;
        $this->demandes_cloturee_cumul_a_fin_mois = null;
        $this->demandes_cloturee_evolution_par_mois = null;
        $this->demandes_reponses_envoyees = null;
        $this->demandes_reponses_envoyees_cumul_a_fin_mois = null;
        $this->demandes_reponses_envoyees_evolution_par_mois = null;
        $this->demandes_hors_attribution_erronees = null;
        $this->demandes_hors_attribution_erronees_cumul_a_fin_mois = null;
        $this->demandes_hors_attribution_erronees_evolution_par_mois = null;
        $this->demandes_en_cours = null;
        $this->demandes_en_cours_cumul_a_fin_mois = null;
        $this->demandes_en_cours_evolution_par_mois = null;
        $this->demandes_affectees_reouverte = null;
        $this->demandes_affectees_reouverte_cumul_a_fin_mois = null;
        $this->demandes_affectees_reouverte_evolution_par_mois = null;
        $this->demandes_en_proposition_reponse = null;
        $this->demandes_en_proposition_reponse_cumul_a_fin_mois = null;
        $this->demandes_en_proposition_reponse_evolution_par_mois = null;
        $this->delai_moyen_mois = null;
        $this->evolution_delai_moyen = null;
        $this->delai_minimal_mois = null;
        $this->evolution_delai_minimal = null;
        $this->delai_maximal = null;
        $this->evolution_delai_maximal = null;
        $this->taux_reponse = null;
        $this->evolution_taux_reponse = null;
        $this->taux_satisfaction_requerants = null;
        $this->evolution_taux_satisfaction = null;
        $this->cumul_taux_satisfaction = null;
        $this->demandes_assistance_interne = null;
        $this->evolution_demande_interne = null;
        $this->cumul_demande_interne = null;
        $this->date_mise_a_jour = null;
        $this->id_entite = null;
        $this->alreadyInSave = false;
        $this->alreadyInValidation = false;
        $this->alreadyInClearAllReferencesDeep = false;
        $this->clearAllReferences();
        $this->resetModified();
        $this->setNew(true);
        $this->setDeleted(false);
    }

    /**
     * Resets all references to other model objects or collections of model objects.
     *
     * This method is a user-space workaround for PHP's inability to garbage collect
     * objects with circular references (even in PHP 5.3). This is currently necessary
     * when using Propel in certain daemon or large-volume/high-memory operations.
     *
     * @param boolean $deep Whether to also clear the references on all referrer objects.
     */
    public function clearAllReferences($deep = false)
    {
        if ($deep && !$this->alreadyInClearAllReferencesDeep) {
            $this->alreadyInClearAllReferencesDeep = true;

            $this->alreadyInClearAllReferencesDeep = false;
        } // if ($deep)

    }

    /**
     * return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(StatistiquesPeer::DEFAULT_STRING_FORMAT);
    }

    /**
     * return true is the object is in saving state
     *
     * @return boolean
     */
    public function isAlreadyInSave()
    {
        return $this->alreadyInSave;
    }

}
