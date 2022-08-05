<?php



/**
 * This class defines the structure of the 'resultat_analyse_historique' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 * @package    propel.generator.mpe.map
 */
class CommonResultatAnalyseHistoriqueTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'mpe.map.CommonResultatAnalyseHistoriqueTableMap';

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
        $this->setName('resultat_analyse_historique');
        $this->setPhpName('CommonResultatAnalyseHistorique');
        $this->setClassname('CommonResultatAnalyseHistorique');
        $this->setPackage('mpe');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('id', 'Id', 'INTEGER', true, null, null);
        $this->addPrimaryKey('organisme', 'Organisme', 'VARCHAR', true, 30, '');
        $this->addColumn('consultation_ref', 'ConsultationRef', 'INTEGER', true, null, 0);
        $this->addColumn('id_offre', 'IdOffre', 'INTEGER', true, null, null);
        $this->addColumn('lot', 'Lot', 'INTEGER', true, null, 0);
        $this->addColumn('date_decision', 'DateDecision', 'VARCHAR', false, 20, null);
        $this->addColumn('type_decision', 'TypeDecision', 'INTEGER', false, 1, null);
        $this->addColumn('type_depot', 'TypeDepot', 'CHAR', true, null, null);
        $this->getColumn('type_depot', false)->setValueSet(array (
  0 => '1',
  1 => '2',
));
        $this->addColumn('justificatif', 'Justificatif', 'CLOB', true, null, null);
        $this->addColumn('nom_entreprise', 'NomEntreprise', 'VARCHAR', false, 30, null);
        $this->addColumn('action', 'Action', 'VARCHAR', false, 30, null);
        $this->addColumn('agent_id', 'AgentId', 'INTEGER', true, null, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
    } // buildRelations()

} // CommonResultatAnalyseHistoriqueTableMap
