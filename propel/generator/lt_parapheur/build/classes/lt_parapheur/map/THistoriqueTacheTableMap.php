<?php



/**
 * This class defines the structure of the 't_historique_tache' table.
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
class THistoriqueTacheTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'lt_parapheur.map.THistoriqueTacheTableMap';

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
        $this->setName('t_historique_tache');
        $this->setPhpName('THistoriqueTache');
        $this->setClassname('THistoriqueTache');
        $this->setPackage('lt_parapheur');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('ID_HISTORIQUE_TACHE', 'IdHistoriqueTache', 'INTEGER', true, null, null);
        $this->addColumn('ID_TACHE', 'IdTache', 'INTEGER', true, null, null);
        $this->addColumn('ID_DEMANDE', 'IdDemande', 'INTEGER', true, null, null);
        $this->addColumn('DATE_ECHEANCE_PREVISIONNELLE', 'DateEcheancePrevisionnelle', 'DATE', false, null, null);
        $this->addColumn('DATE_ECHEANCE_REELLE', 'DateEcheanceReelle', 'DATE', false, null, null);
        $this->addColumn('RESPONSABLE', 'Responsable', 'VARCHAR', false, 255, null);
        $this->addColumn('TAUX_REALISATION', 'TauxRealisation', 'FLOAT', false, 10, null);
        $this->addColumn('ID_ACTION', 'IdAction', 'INTEGER', false, null, null);
        $this->addColumn('ID_STATUT', 'IdStatut', 'INTEGER', false, null, null);
        $this->addColumn('MOTIF', 'Motif', 'LONGVARCHAR', false, null, null);
        $this->addColumn('ID_AGENT', 'IdAgent', 'INTEGER', true, null, null);
        $this->addColumn('AGENT', 'Agent', 'VARCHAR', true, 255, null);
        $this->addColumn('DATE_MODIFICATION', 'DateModification', 'TIMESTAMP', true, null, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
    } // buildRelations()

} // THistoriqueTacheTableMap
