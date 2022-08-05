<?php



/**
 * This class defines the structure of the 't_CAO_Ordre_De_Passage' table.
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
class CommonTCAOOrdreDePassageTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'mpe.map.CommonTCAOOrdreDePassageTableMap';

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
        $this->setName('t_CAO_Ordre_De_Passage');
        $this->setPhpName('CommonTCAOOrdreDePassage');
        $this->setClassname('CommonTCAOOrdreDePassage');
        $this->setPackage('mpe');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('id_ordre_de_passage', 'IdOrdreDePassage', 'BIGINT', true, null, null);
        $this->addForeignPrimaryKey('organisme', 'Organisme', 'VARCHAR' , 'Organisme', 'acronyme', true, 30, null);
        $this->addForeignKey('id_seance', 'IdSeance', 'BIGINT', 't_CAO_Seance', 'id_seance', true, null, null);
        $this->addForeignKey('id_commission', 'IdCommission', 'BIGINT', 't_CAO_Commission', 'id_commission', true, null, null);
        $this->addForeignKey('id_commission_consultation', 'IdCommissionConsultation', 'BIGINT', 't_CAO_Commission_Consultation', 'id_commission_consultation', true, 11, null);
        $this->addColumn('ordre_de_passage', 'OrdreDePassage', 'TINYINT', true, null, null);
        $this->addColumn('id_ref_org_val_etape', 'IdRefOrgValEtape', 'INTEGER', true, null, null);
        $this->addForeignKey('date_seance', 'DateSeance', 'TIMESTAMP', 't_CAO_Seance', 'date', true, null, null);
        $this->addColumn('date_passage', 'DatePassage', 'TIMESTAMP', true, null, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('CommonTCAOSeanceRelatedByDateSeance', 'CommonTCAOSeance', RelationMap::MANY_TO_ONE, array('date_seance' => 'date', ), null, 'CASCADE');
        $this->addRelation('CommonTCAOCommissionConsultation', 'CommonTCAOCommissionConsultation', RelationMap::MANY_TO_ONE, array('id_commission_consultation' => 'id_commission_consultation', ), null, null);
        $this->addRelation('CommonTCAOCommission', 'CommonTCAOCommission', RelationMap::MANY_TO_ONE, array('id_commission' => 'id_commission', ), null, null);
        $this->addRelation('CommonTCAOSeanceRelatedByIdSeance', 'CommonTCAOSeance', RelationMap::MANY_TO_ONE, array('id_seance' => 'id_seance', ), null, null);
        $this->addRelation('CommonOrganisme', 'CommonOrganisme', RelationMap::MANY_TO_ONE, array('organisme' => 'acronyme', ), null, null);
        $this->addRelation('CommonTCAOSeanceInvite', 'CommonTCAOSeanceInvite', RelationMap::ONE_TO_MANY, array('id_ordre_de_passage' => 'id_ordre_de_passage', ), null, null, 'CommonTCAOSeanceInvites');
    } // buildRelations()

} // CommonTCAOOrdreDePassageTableMap
