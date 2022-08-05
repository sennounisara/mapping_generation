<?php



/**
 * This class defines the structure of the 'Evenement' table.
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
class CommonEvenementTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'lt_parapheur.map.CommonEvenementTableMap';

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
        $this->setName('Evenement');
        $this->setPhpName('CommonEvenement');
        $this->setClassname('CommonEvenement');
        $this->setPackage('lt_parapheur');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('id_evenement', 'IdEvenement', 'INTEGER', true, null, null);
        $this->addColumn('reference_consultation', 'ReferenceConsultation', 'INTEGER', true, null, null);
        $this->addColumn('reference_utilisateur', 'ReferenceUtilisateur', 'VARCHAR', true, 255, null);
        $this->addColumn('id_service', 'IdService', 'INTEGER', true, null, null);
        $this->addColumn('organisme', 'Organisme', 'VARCHAR', false, 30, null);
        $this->addColumn('objet_consultation', 'ObjetConsultation', 'LONGVARCHAR', true, null, null);
        $this->addColumn('type_evenement', 'TypeEvenement', 'CHAR', true, null, null);
        $this->getColumn('type_evenement', false)->setValueSet(array (
  0 => 'publication',
  1 => 'modification',
  2 => 'annulation',
  3 => 'decision',
));
        $this->addColumn('date_evenement', 'DateEvenement', 'TIMESTAMP', true, null, null);
        $this->addColumn('date_creation', 'DateCreation', 'TIMESTAMP', true, null, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
    } // buildRelations()

} // CommonEvenementTableMap
