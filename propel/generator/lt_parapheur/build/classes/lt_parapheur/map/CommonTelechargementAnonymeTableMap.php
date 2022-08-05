<?php



/**
 * This class defines the structure of the 'TelechargementAnonyme' table.
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
class CommonTelechargementAnonymeTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'lt_parapheur.map.CommonTelechargementAnonymeTableMap';

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
        $this->setName('TelechargementAnonyme');
        $this->setPhpName('CommonTelechargementAnonyme');
        $this->setClassname('CommonTelechargementAnonyme');
        $this->setPackage('lt_parapheur');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('id', 'Id', 'INTEGER', true, 22, null);
        $this->addForeignPrimaryKey('organisme', 'Organisme', 'VARCHAR' , 'consultation', 'organisme', true, 30, '');
        $this->addForeignKey('consultation_ref', 'ConsultationRef', 'INTEGER', 'consultation', 'reference', true, null, null);
        $this->addForeignKey('consultation_ref', 'ConsultationRef', 'INTEGER', 'consultation', 'reference', true, null, null);
        $this->addColumn('datetelechargement', 'Datetelechargement', 'VARCHAR', true, 20, '0000-00-00 00:00:00');
        $this->addColumn('tirage_plan', 'TiragePlan', 'INTEGER', true, null, 0);
        $this->addColumn('support', 'Support', 'CHAR', true, null, '1');
        $this->getColumn('support', false)->setValueSet(array (
  0 => '1',
  1 => '2',
  2 => '3',
));
        $this->addColumn('noms_fichiers_dce', 'NomsFichiersDce', 'LONGVARCHAR', false, null, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('CommonConsultationRelatedByOrganismeConsultationRef', 'CommonConsultation', RelationMap::MANY_TO_ONE, array('organisme' => 'organisme', 'consultation_ref' => 'reference', ), 'CASCADE', 'CASCADE');
        $this->addRelation('CommonConsultationRelatedByConsultationRef', 'CommonConsultation', RelationMap::MANY_TO_ONE, array('consultation_ref' => 'reference', ), null, null);
    } // buildRelations()

} // CommonTelechargementAnonymeTableMap
