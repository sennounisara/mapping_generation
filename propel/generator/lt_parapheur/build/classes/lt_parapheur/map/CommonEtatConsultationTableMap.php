<?php



/**
 * This class defines the structure of the 'EtatConsultation' table.
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
class CommonEtatConsultationTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'lt_parapheur.map.CommonEtatConsultationTableMap';

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
        $this->setName('EtatConsultation');
        $this->setPhpName('CommonEtatConsultation');
        $this->setClassname('CommonEtatConsultation');
        $this->setPackage('lt_parapheur');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('id_etat', 'IdEtat', 'INTEGER', true, null, null);
        $this->addColumn('code_etat', 'CodeEtat', 'VARCHAR', true, 200, '');
        $this->addColumn('abreviation_etat', 'AbreviationEtat', 'VARCHAR', true, 20, '');
        $this->addColumn('visible', 'Visible', 'INTEGER', true, null, 0);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
    } // buildRelations()

} // CommonEtatConsultationTableMap
