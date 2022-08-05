<?php



/**
 * This class defines the structure of the 'statistiques_par_entite' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 * @package    propel.generator.lt_parapheur.map
 */
class StatistiquesParEntiteTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'lt_parapheur.map.StatistiquesParEntiteTableMap';

    /**
     * Initialize the table attributes, columns and validators
     * Relations are not initialized by this method since they are lazy loaded
     *
     * @return void
     * @throws PropelException
     */
    public function initialize()
    {
        // attributes
        $this->setName('statistiques_par_entite');
        $this->setPhpName('StatistiquesParEntite');
        $this->setClassname('StatistiquesParEntite');
        $this->setPackage('lt_parapheur');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('ID', 'Id', 'INTEGER', true, null, null);
        $this->addColumn('ID_ENTITE', 'IdEntite', 'INTEGER', false, null, null);
        $this->addColumn('TOTAL_RECLAMATIONS_PAR_MOIS', 'TotalReclamationsParMois', 'INTEGER', false, null, null);
        $this->addColumn('STATUT_GENERAL', 'StatutGeneral', 'INTEGER', false, null, null);
        $this->addColumn('STATUT_DEMANDE', 'StatutDemande', 'INTEGER', false, null, null);
        $this->addColumn('CUMUL_A_FIN_MOIS', 'CumulAFinMois', 'INTEGER', false, null, null);
        $this->addColumn('EVOLUTION_MOIS', 'EvolutionMois', 'INTEGER', false, null, null);
        $this->addColumn('ID_STATISTIQUE', 'IdStatistique', 'INTEGER', false, null, null);
        $this->addColumn('ANNEE', 'Annee', 'INTEGER', false, null, null);
        $this->addColumn('MOIS', 'Mois', 'VARCHAR', false, 11, null);
        $this->addColumn('SIGLE_PATH', 'SiglePath', 'VARCHAR', false, 255, null);
        $this->addColumn('TOTAL_PAR_MOIS_ALL_CHILD', 'TotalParMoisAllChild', 'INTEGER', true, null, null);
        $this->addColumn('TOTAL', 'Total', 'INTEGER', false, null, null);
        $this->addColumn('TOTAL_NON_AFFECTE', 'TotalNonAffecte', 'INTEGER', false, null, null);
        $this->addColumn('TOTAL_HORS_ATTRIBUTION', 'TotalHorsAttribution', 'INTEGER', false, null, null);
        $this->addColumn('NIVEAU_ENTITE', 'NiveauEntite', 'VARCHAR', false, 50, null);
        $this->addColumn('EVOLUTION_ALL_CHILD', 'EvolutionAllChild', 'INTEGER', false, null, null);
        $this->addColumn('EVOLUTION_TOTAL', 'EvolutionTotal', 'INTEGER', false, null, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
    } // buildRelations()

} // StatistiquesParEntiteTableMap
