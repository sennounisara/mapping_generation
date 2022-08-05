<?php



/**
 * This class defines the structure of the 'Admissibilite_Analyse' table.
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
class CommonAdmissibiliteAnalyseTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'lt_parapheur.map.CommonAdmissibiliteAnalyseTableMap';

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
        $this->setName('Admissibilite_Analyse');
        $this->setPhpName('CommonAdmissibiliteAnalyse');
        $this->setClassname('CommonAdmissibiliteAnalyse');
        $this->setPackage('lt_parapheur');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('id', 'Id', 'INTEGER', true, null, null);
        $this->addColumn('id_offre', 'IdOffre', 'INTEGER', true, 22, 0);
        $this->addColumn('organisme', 'Organisme', 'VARCHAR', true, 30, '');
        $this->addColumn('sous_pli', 'SousPli', 'INTEGER', true, 3, 0);
        $this->addColumn('admissibilite', 'Admissibilite', 'INTEGER', true, 1, 0);
        $this->addColumn('commentaire', 'Commentaire', 'LONGVARCHAR', false, null, null);
        $this->addColumn('type_depot', 'TypeDepot', 'CHAR', true, null, null);
        $this->getColumn('type_depot', false)->setValueSet(array (
  0 => 'electronique',
  1 => 'papier',
));
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
    } // buildRelations()

} // CommonAdmissibiliteAnalyseTableMap
