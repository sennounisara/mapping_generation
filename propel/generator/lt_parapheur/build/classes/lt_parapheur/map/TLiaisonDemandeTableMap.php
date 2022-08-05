<?php



/**
 * This class defines the structure of the 't_liaison_demande' table.
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
class TLiaisonDemandeTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'lt_parapheur.map.TLiaisonDemandeTableMap';

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
        $this->setName('t_liaison_demande');
        $this->setPhpName('TLiaisonDemande');
        $this->setClassname('TLiaisonDemande');
        $this->setPackage('lt_parapheur');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('ID', 'Id', 'INTEGER', true, null, null);
        $this->addColumn('ID_DEMANDE', 'IdDemande', 'INTEGER', true, null, null);
        $this->addColumn('ID_DEMANDE_LIE', 'IdDemandeLie', 'INTEGER', true, null, null);
        $this->addColumn('TYPE_RELATION', 'TypeRelation', 'INTEGER', true, null, null);
        $this->addColumn('NUMERO_DEMANDE_LIE', 'NumeroDemandeLie', 'VARCHAR', true, 250, null);
        $this->addColumn('NUM_DEMANDE', 'NumDemande', 'VARCHAR', true, 250, null);
        $this->addColumn('ID_AGENT', 'IdAgent', 'INTEGER', true, null, null);
        $this->addColumn('ID_AFFAIRE', 'IdAffaire', 'INTEGER', false, null, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
    } // buildRelations()

} // TLiaisonDemandeTableMap
